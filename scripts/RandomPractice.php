<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class RandomPractice
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>Random Practice Template</h1>"; ?>
            <p id="demo"></p>
            <p id="demoOne"></p>
            <p id="demoTwo"></p>
            <p id="demoThree"></p>
            <p id="demoFour"></p>
            <p id="demoFive"></p>
            <p id="demoSix"></p>

            <script>
                var name = "Bishwajit Paul";
                document.getElementById("demo").innerHTML = name;
            </script>

            <script>
                var person = {
                fname: "Narayan Chanra",
                lname: "Paul",

                fullName  : function(){
                    return this.fname + this.lname;
                    }
                };
                document.getElementById("demoOne").innerHTML = person.fullName();
            </script>

            <script>
                var data = function(){
                    return this;
                }
                document.getElementById("demoTwo").innerHTML = data();
            </script>

            
            <!-- Explicit function binding using predefined call() & apply() methods  -->
            <script>
                var personOne = {
                    fullName : function(NationalId, Religion) {
                        return this.firstName + " " + this.lastName + " " + this.address + " , " + "  " + NationalId + " ," + Religion;
                    } 
                }
                var personFour = {
                    firstName: "Supti",
                    lastName: "Paul",
                    address: "Dhaka"
                }
                var z = personOne.fullName.apply(personFour,["1223113313", "Hindu"]);
                document.getElementById("demoSix").innerHTML = z;
            </script>

            <script>
                 var personOne = {
                    fullName : function() {
                        return this.firstName + " " + this.lastName + " " + this.address;
                    } 
                }
                 var personTwo = {
                    firstName: "Runu",
                    lastName: "Paul",
                    address: "Jahore"
                }
                var x = personOne.fullName.call(personTwo);               
                document.getElementById("demoThree").innerHTML = x;
            </script>

            <script>
                var personOne = {
                    fullName : function() {
                        return this.firstName + " " + this.lastName + " " + this.address;
                    } 
                }
                var personThree = {
                    firstName: "Pew",
                    lastName: "Paul",
                    address: "Khulna"
                }
                var y = personOne.fullName.apply(personThree);
                document.getElementById("demoFour").innerHTML = y;
            </script>

            <!-- Javascript class -->
            <script>
                class Car {
                    constructor(name, year, price) {
                        this.name = name;
                        this.year = year;
                        this.price = price;
                    }
                    // Deducts the year value
                    age(x) {
                        return x - this.year;
                    }
                }
                // Gets the date value
                let date = new Date();
                // Gets the Full year value of date
                let year = date.getFullYear();

                // Class is instantiated and values added to parameters name and year respectively
                let myCar = new Car("Toyota", 2010, "3,00,000");
                document.getElementById("demoFive").innerHTML = "My car "+ myCar.name +" "+ " is " +
                myCar.age(year) + " years old " + " and the price is " + myCar.price + " Tk";
                console.log(myCar);
            </script>
            <?php
        }
    }

    // Instantiated
    new RandomPractice;
    ?>
<?php require_once '../partials/bottom.php';?>