<?php include_once '../partials/_head.php';?>
<body>
    <div class="container">
    <?php include_once '../partials/_header.php';?>
        <div class="row">
        <?php include_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result">

                    <!-- Code below -->
                    <?php
                    class jsFunction
                    {
                        public function __construct()
                        {
                            ?>
                        <!-- METHOD ONE OF FUNCTIO DECLARATION -->
                            <?php echo "<h4><strong>(1) Method one of function declaration.</strong></h4>"; ?>
                        <p id="demo"></p>
                        <script>
                            function myFunction(a, b, c) {
                                return a*b*c;
                            };
                            document.getElementById("demo").innerHTML =
                            "The multiplication result is = " + myFunction(5,6,7);
                        </script>

                        <!-- METHOD TWO FUNCTIO DECLARATION -->
                            <?php echo "<h4><strong>(2) Method two of function declaration.</strong></h4>"; ?>
                        <p id="demo1"></p>
                        <script>
                            var x = function myFunction(a, b, c) {
                                return a*b*c;
                            };
                            document.getElementById("demo1").innerHTML = "The multiplication result is = " + x(10,10,10);
                        </script>

                        <!-- JS BUILT_IN FUNCTION CONSTRUCT -->
                            <?php echo "<h4><strong>(3) JS built-in function construct with 'new' keyword.</strong></h4>"; ?>
                        <p id="demo2"></p>
                        <script>
                            var myFunction = new Function("a", "b", "return a * b");
                            document.getElementById("demo2").innerHTML =
                            "The result of the function is : " + myFunction(12,10);
                        </script>

                        <!-- NEW KEYWORD IS NOT NECESSARY -->
                            <?php echo "<h4><strong>(4) JS function without 'new' keyword.</strong></h4>"; ?>
                        <p id="demo3"></p>
                        <script>
                            var myFunction = function(a, b) {
                                return a * b;
                            }
                            document.getElementById("demo3").innerHTML =
                            "The result of the function is : " + myFunction(12, 12);
                        </script>

                        <!-- SELF INVOKING JS FUNCTION -->
                            <?php echo "<h4><strong>(5) The result of the Self invoking JS function.</strong></h4>"; ?>
                        <p id="demo4"></p>
                        <script>
                            (function(){
                                document.getElementById("demo4").innerHTML =
                                "Bangladesh is my homeland.";
                            })();
                        </script>

                         <!-- FUNCTION CAN BE USED AS VALUE -->
                            <?php echo "<h4><strong>(6) Function used as value.</strong></h4>"; ?>
                        <p id="demo5"></p>
                        <script>
                            function myFunction(a, b) {
                                return a*b;
                            }
                            var x = myFunction(13,12);
                            document.getElementById("demo5").innerHTML = "Multipliocation result is :" + x;
                        </script>

                        <!-- JS FUNCTIOIN CALL -->
                            <?php echo "<h4><strong>(7) JS function call.</strong></h4>"; ?>
                        <p id="demo6"></p>
                        <script>
                            var myObject = {
                                firstName : "John",
                                lastName : "Doe",
                                fullName: function() {
                                    return this.firstName + ' '+ this.lastName;
                                }
                            }
                            x = myObject.fullName();
                            document.getElementById("demo6").innerHTML = x;
                        </script>

                        <!-- JS FUNCTION APPLY -->
                            <?php echo "<h4><strong>(8.a) JS function apply (Method reuse).</strong></h4>"; ?>
                        <p id="demo8"></p>
                        <script>
                            var person = {
                                fullName: function() {
                                    return this.firstName + " " + this.lastName + " is " + this.age + " years old.";
                                }
                            }
                            var person1 = {
                                firstName: "Bishwajit",
                                lastName: "Paul",
                                age: 50,
                            }
                            var x = person.fullName.apply(person1);
                            document.getElementById("demo8").innerHTML = x;
                        </script>

                        <!-- JS FUNCTION APPLY WITH ARGUMENTS -->
                            <?php echo "<h4><strong>(8.b) JS function apply (Method reuse with arguments).</strong></h4>"; ?>
                        <p id="demo9"></p>
                        <script>
                            var person = {
                                fullName: function(city, country){
                                    return this.firstName + " " + this.lastName + "," + city + "," + country;
                                }
                            }
                            var person1 = {
                                firstName : "Urmila",
                                lastName : "Sarkar",
                            }
                            var x = person.fullName.apply(person1, ["Dhaka", "Rajshahi"]);
                            document.getElementById("demo9").innerHTML = x;
                        </script>

                        <!-- JS FUNCTION APPLY WITH ARGUMENTS COMPARED WITH CALL() -->
                            <?php echo "<h4><strong>(8.c) JS function apply (Method reuse with arguments) compared with call().</strong></h4>"; ?>
                        <p id="demo10"></p>
                        <script>
                            var person = {
                                fullName: function(city, country){
                                    return this.firstName + " " + this.lastName + "," + city + "," + country;
                                }
                            }
                            var person1 = {
                                firstName : "Bakul",
                                lastName : "Sarkar",
                            }
                            var person2 = {
                                firstName : "Mithila",
                                lastName : "Paul",
                            }
                            var x = person.fullName.call(person2, "Chittagong", "Khulna");
                            document.getElementById("demo10").innerHTML = x;
                        </script>

                        <!-- FUNCTION CLOSURES -->
                            <?php echo "<h4><strong>(9) JS function closures.</strong></h4>"; ?>
                        <p id="demo11"></p>
                        <!-- Js global variables can be made local by closures -->
                        <button type="button" onclick="myFunction()"> Click me</button>
                        <script>
                            function myFunction(){
                                var a = 4;
                                document.getElementById("demo11").innerHTML = a*a;
                            }
                        </script>



                            <?php
                        }
                    }
                    // Class instantiated
                    new jsFunction;
                    //Code above
                    ?>
                </div>
            </div>
        </div>
        <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
