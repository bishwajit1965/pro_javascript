<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php

    class FunctionInvocation
    {
        public function __construct()
        {
            ?>
            <h3 class='heading'>Function Invocation Result :</h3>
            <p id="demo" class="data-display"></p>
            <p id="demo1" class="data-display"></p>
            <p id="demo2" class="data-display"></p>

            <script>
                function myFunction (a, b) {
                    return a * b;
                }
                document.getElementById("demo").innerHTML = "The function invocation output is " + myFunction(20, 2);
            </script>

            <script>
                function anotherFunction (a, b) {
                    return a * b;
                }
                document.getElementById("demo1").innerHTML = "The function invocation output is " + window.anotherFunction(20, 2);
            </script>

            <script>
                var myObject = {
                    firstname : "Pew",
                    lastname : "Paul",
                    age : "10",
                    fullName:function(){
                        return this.firstname + " " + this.lastname + " and she is " + this.age + " years old.";
                    }
                }
                
                document.getElementById("demo2").innerHTML = "The full name is " + myObject.fullName();
            </script>

            <p class="data-display">
            The fullName method is a function. The function belongs to the object. myObject is the owner of the function.The thing called this, is the object that "owns" the JavaScript code. In this case the value of this is myObject.Test it! Change the fullName method to return the value of this:</p>

            <p id="demo3" class="data-display"></p>

            <script>
                var myObject = {
                    firstName : "Runu",
                    middleName : "Rani",
                    lastName : "Paul",
                    age : 47,
                    fullName : function() {
                        return this;
                    }
                }
                document.getElementById("demo3").innerHTML = myObject.fullName();
            </script>

            <h3>Invoking a Function with a Function Constructor</h3>
            <p>If a function invocation is preceded with the new keyword, it is a constructor invocation.It looks like you create a new function, but since JavaScript functions are objects you actually create a new object:</p>

            <p id="demo4" class="data-display"></p>

            <script>
                // Function coanstructor
                function myFunction (argumentOne, argumentTwo, argumentThree) {
                    //When constructor semicolon (;) is needed not comma(,) at tle end of argument
                    this.firstName = argumentOne;
                    this.lastName = argumentTwo;
                    this.address = argumentThree;
                }
                var x = new myFunction("Arpita", "Supti", "Jashore");
                document.getElementById("demo4").innerHTML = x.firstName + " and " +  x.lastName + " are from " + x.address;

            </script>

            <h3 class="data-display">The JavaScript call() Method</h3>
            <p>The call() method is a predefined JavaScript method.</p>
            <p>It can be used to invoke (call) a method with an owner object as an argument (parameter).</p>
            <p>With call(), an object can use a method belonging to another object.</p>
            <p>The call() method takes arguments separately.</p>

            <p id="demo5" class="data-display"></p>
            <p id="demo6" class="data-display"></p>
            <p id="demo7" class="data-display"></p>
            <script>
                var person = {
                    fullName :function() {
                        return this.firstName + ' ' + this.lastName;   
                    }
                }
                var person1 = {
                    firstName: 'Arpita',
                    lastName: 'Paul'
                }
                var person2 = {
                    firstName: 'Supti',
                    lastName: 'Paul'
                }
                var person3 = {
                    firstName: 'Pew',
                    lastName :'Paul'
                }
                // call() takes arguments separately
                var x = person.fullName.call(person1);
                var y = person.fullName.call(person2);
                var z = person.fullName.call(person3);
               
                document.getElementById('demo5').innerHTML = x ;//Will output Arpita Paul
                document.getElementById('demo6').innerHTML = y ;//Will output Supti Paul
                document.getElementById('demo7').innerHTML = z ;// Will output Pew Paul
            </script>

            <h3 class="data-display">The call() Method with Arguments</h3>
            <p>The call() method can accept arguments separately</p>
            
            <p id="demo8" class="data-display"></p>
            <script>
                var person ={
                    fullName:function(city, country) {
                        return this.firstName + ' ' + this.lastName + ' , ' 
                        + city + ' , ' + country;
                    }
                }
                var person1 = {
                    firstName : 'Runu',
                    lastName : 'Paul'
                }
                var x = person.fullName.call(person1, 'Dhaka', 'Bangladesh');
                document.getElementById('demo8').innerHTML = x;
            </script>
            
            <h3 class="data-display">The apply() Method with Arguments</h3>
            <p>The apply() method takes arguments as an array.</p>

            <p id="demo9" class="data-display"></p>
            <script>
                var person = {
                    fullName: function(city, country) {
                        return this.firstName + ' '  + this.lastName + ' , ' + city + ' , ' + country;
                    }
                }
                var person1 = {
                    firstName : 'Bishwajit',
                    lastName : 'Paul'
                }
                //apply() takes arguments as array
                var x = person.fullName.apply(person1, ['Dhaka', 'Bangladesh']);
                document.getElementById('demo9').innerHTML = x;
            </script>

            <?php
        }
    }
    new FunctionInvocation;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
