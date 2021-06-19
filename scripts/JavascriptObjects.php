<?php require_once '../partials/_head.php';?>
<body>
    <div class="container">
    <?php require_once '../partials/_header.php';?>
        <div class="row">
        <?php require_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result" style="border-left:6px solid #DDD;background-color: #FFF; padding:20px;">
                    <!-- Code below -->
                    <?php
                    /**
                     * Javascript Objects
                     */
                    class JavascriptObjects
                    {
                        /**
                         * Object creation methods
                         */
                        public function __construct()
                        {
                            ?>
                            <!-- OBJECT CREATION METHOD ONE -->
                            <?php echo "<h4><strong>(1) Object creation method one.</strong></h4>"; ?>
                            <p id="demo"></p>
                            <script>
                                var person = {
                                    firstName : "Bishwajit ",
                                    lastName : " Paul ",
                                    age : "52",
                                    hair : "Black"
                                };
                                document.getElementById("demo").innerHTML = person.firstName +  person.lastName + " has "
                                + person.hair + " hair and he is " + person.age + " years old.";
                            </script>


                            <!-- OBJECT CREATION METHOD TWO -->
                            <?php echo "<h4><strong>(2) Object creation method two.</strong></h4>"; ?>
                            <p id="demo1"></p>
                            <script>
                                var person = new Object();
                                person.firstName = "Arpita ";
                                person.lastName = " Paul ";
                                person.age = 20;
                                person.hair = " black ";

                                document.getElementById("demo1").innerHTML = person.firstName + person.lastName + " has "
                                + person.hair + " hair and she is "+ person.age+" years old.";
                            </script>


                            <!-- OBJECT METHOD CREATION -->
                            <?php echo "<h4><strong>(3) Object method creation.</strong></h4>"; ?>

                            <p id="demo2"></p>
                            <script>
                                var person = {
                                    firstName : "Pew",
                                    lastName : "Paul",
                                    age : 9,
                                    fullName : function() {
                                        return this.firstName + this.lastName + this.age;
                                    }
                                };
                                // Data displayed from object
                                document.getElementById("demo2").innerHTML = person.fullName();
                            </script>


                            <!-- JAVASCRIPT ACCESSORS GETTERS AND SETTERS -->
                            <?php echo "<h4><strong>(4) Javascript accessors getters and setters.</strong></h4>"; ?>
                            <p id="demo3"></p>
                            <script>
                                var person = {
                                    firstName : " Runu ",
                                    lastName : " Paul ",
                                    language : " Bangla ",
                                    get lang() {
                                        return this.language;
                                    }
                                };
                                // Display getter result
                                document.getElementById("demo3").innerHTML = person.lang;
                            </script>

                            <p id="demo4"></p>
                            <script>
                                var person = {
                                    firstName : " Runu ",
                                    lastName : " Paul ",
                                    language : "No",
                                    set lang(value) {
                                        return this.language = value;
                                    }
                                };
                                person.lang = "English"
                                // Display setter result
                                document.getElementById("demo4").innerHTML = person.language;
                            </script>


                            <!-- JAVASCRIPT OBJECT CONSTRUCTOR -->
                            <?php echo "<h4><strong>(5) JS object constructors.</strong></h4>"; ?>
                            <p id="demo5"></p>
                            <script>
                            // Constructor function for person object
                            function person(first, last, age, eye) {
                                this.firstName = first;
                                this.lastName = last;
                                this.age = age;
                                this.eyeColor = eye;
                            }
                            // Create a person object
                            var myFather = new person("Narayan", "paul", 80, "black");
                            // Display result
                            document.getElementById("demo5").innerHTML= myFather.age;
                            </script>

                            <!-- JAVASCRIPT PROTOTYPE -->
                            <?php echo "<h4><strong>(6) JS prototype.</strong></h4>"; ?>
                            <p id="demo6"></p>
                            <script>
                                function Person(first, last, age, eye) {
                                    this.firstName = first;
                                    this.lastName = last;
                                    this.age = age;
                                    this.eyeColor = eye;
                                }
                                var myFather = new Person("John", "Doe", 50, "black");
                                var myMother = new Person("JDally", "Doe", 40, "blue");

                                document.getElementById("demo6").innerHTML = "My father is " + myFather.age + " years old.";
                            </script>


                            <!-- JAVASCRIPT ES5 OBJECT METHOD -->
                            <?php echo "<h4><strong>(7) JS ES5 object method.</strong></h4>"; ?>
                            <p id="demo7"></p>
                            <script>
                            // Create an object
                                var person = {
                                    firstName : "John",
                                    lastName : "Doe",
                                    language : "English"
                                };
                                Object.defineProperty(person, "language", {value:"Hindi"});
                                document.getElementById("demo7").innerHTML = person.language;
                            </script>

                            <!--JS FUNCTION CALL-->

                            <?php
                        }
                    }

                    // Class instantiated
                    new JavascriptObjects;

                    //Code above
                    ?>
                </div>
            </div>
        </div>
        <?php require_once '../partials/_footer.php';?>
    </div>
</body>
</html>
