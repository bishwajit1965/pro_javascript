<?php require_once '../partials/_head.php';?>
<body>
    <div class="container">
    <?php require_once '../partials/_header.php';?>
        <div class="row">
        <?php require_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result">
                <!-- Code below -->
                <?php
                /**
                 * Object constructor
                 */
                class ObjectConstructor
                {
                    /**
                     * Constructor function
                     */
                    public function __construct()
                    {
                        ?>
                        <h2 class="heading">Object Constructor</h2>
                        <h4 id="demo"></h4>
                        <script>
                            // Create constructor
                            function Person(first, last, age, eye, education, country) {
                                this.firstName = first;
                                this.lastName = last;
                                this.age = age;
                                this.eyeColor = eye;
                                this.education = education;
                                this.subject = "Soil and Environmental Sciences";
                                this.country = country;
                                // Using function
                                this.name = function () {
                                    return this.firstName + this.lastName + ' lives in ' + sthis.country;
                                }
                            }
                            // Use of prototype 
                            Person.prototype.nationality = "Bangladeshi";
                            Person.prototype.maritalStatus = "unmarried";
                            Person.prototype.bonding = "loving and restful";
                            Person.prototype.myReaction = "love her very much.";

                            var MyDaughter = new Person("Arpita", "Paul", 23, "black", "student of Barishal University", "Bangladesh");

                            document.getElementById("demo").innerHTML = "My daughter\'s age is " + MyDaughter.age + "." + ' She has ' + MyDaughter.eyeColor + ' eyes.' + ' she is a ' + MyDaughter.education + ' ' + ' and she is studying in ' + MyDaughter.subject + ' . '+ MyDaughter.name() + ' and she is a ' + MyDaughter.nationality + ' by birth.' + " She is " + MyDaughter.maritalStatus +'.' + "Shec is very " + MyDaughter.bonding +' to me .'+ " I " + MyDaughter.myReaction;
                        </script>
                        <?php
                    }
                }
                // Instantiated
                new ObjectConstructor;
                ?>
                </div>
            </div>
        </div>
    <?php require_once '../partials/_footer.php';?>
    </div>
</body>
</html>
