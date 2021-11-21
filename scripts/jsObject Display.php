<?php
/**
 * jsObjectDisplay.php
 */
require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    echo "File path: " .__FILE__."<hr>";
    class jsObjectDisplay
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Javascript Display template</h1>"; ?>
            <!-- Javascript object display will simply out put 'Object Object' -->
            <h4>Javascript object display will simply out put 'Object Object</h4><hr>

            <p id="demo"></p>

            <script>
                const person = {
                    name: "Bishwajit",
                    address: "Jashore",
                    phone: 123456  
                }
                document.getElementById("demo").innerHTML = person;
            </script>
            <hr>
            <!-- ********************************************************** -->
            <h4>Some common solutions to display JavaScript objects are:</h4>
            <p>Displaying the Object Properties by name</p>
            <p>Displaying the Object Properties in a Loop</p>
            <p>Displaying the Object using Object.values()</p>
            <p>Displaying the Object using JSON.stringify()</p>

            <!-- Displaying object properties by name -->
            <h4>Displaying the Object Properties by name</h4><hr>
            <p id="demo1"></p>
            <script>
                const person1 = {
                    firstName : "Bishwjit",
                    lastName : "Paul",
                    city : "Jashore"
                }
                document.getElementById("demo1").innerHTML = "The address is :" + person1.firstName + " " +
                person1.lastName + " " + person1.city;
                document.getElementById("demo1").style.color = "green";
                document.getElementById("demo1").style.fontSize = 'large';
            </script>
            <hr>
            <!-- Displaying object properties by loop -->
            <h4>Displaying the Object Properties in a Loop</h4>
            <p id="demo2"></p>
            <script>
                const person2 = {
                    firstName : "Bishwjit",
                    lastName : "Paul",
                    city : "Jashore"
                }
                let address = "";
                for(x in person2) {
                    address += person2[x] + ' ';
                }
                document.getElementById("demo2").innerHTML = "The address is : " + address;
                document.getElementById("demo2").style.color = "red";
                document.getElementById("demo2").style.fontSize = 'large';
            </script>
            
            <hr>
           <!-- Displaying object properties by values -->
           <h4>Displaying the Object using Object.values()</h4>
           <p>Object.values() converts an object to an array.</p>

           <p id="demo3"></p>
            <script>
                const person3 = {
                    firstName : "Bishwjit",
                    lastName : "Paul",
                    city : "Jashore"
                }
                document.getElementById("demo3").innerHTML = "The address is : " + Object.values(person3);
                document.getElementById("demo3").style.color = "green";
                document.getElementById("demo3").style.fontSize = 'large';
            </script>
            <hr>
           <!-- Displaying object properties by using JSON.stringify() -->
            <h4>Displaying object properties by using JSON.stringify()</h4>
            <p id="demo4"></p>
            <script>
                const person4 = {
                    firstName : "Bishwjit",
                    lastName : "Paul",
                    city : "Jashore"
                }
                let newString = JSON.stringify(person4);
                document.getElementById("demo4").innerHTML = "The address is : " + newString;
                document.getElementById("demo4").style.color = "red";
                document.getElementById("demo4").style.fontSize = 'large';
            </script>
            <hr>
            <!-- JSON.stringify() will not convert the function into array -->
            <h4>JSON.stringify() will not convert the function into array</h4>
            <p id="demo5"></p>
            <script>
                const person5 = {
                    firstName : "Bishwjit",
                    lastName : "Paul",
                    city : "Jashore",
                    age : function  () {return 56 ;}
                };
                // This can be "fixed" if the functions are converted into strings before stringifying
                person5.age = person5.age.toString();
                let x = JSON.stringify(person5);
                document.getElementById("demo5").innerHTML = "The address is : " + x;
                document.getElementById("demo5").style.color = "green";
                document.getElementById("demo5").style.fontSize = 'large';
            </script>
            <hr>
            <!-- ********************************************************** -->
            <h4>JSON.stringify() array</h4>
            <p id="demo6"></p>

            <script>
                const myArray = ["Arpita", "Supti", "Pew"];
                document.getElementById("demo6").innerHTML = JSON.stringify(myArray);
            </script>


            <?php
        }
    }

    // Instantiated
    new jsObjectDisplay;
    ?>
<?php require_once '../partials/bottom.php';?>
    