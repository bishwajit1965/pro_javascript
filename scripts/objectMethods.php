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

                class objectMethods
                {
                    public function __construct()
                    {
                        ?>

                        <h4 id="demo"></h4>
                        <script>
                            //create object
                            var person = {
                            firstName : "Bishwajit",
                            lastName: "Paul",
                            age : 55,
                            phone : +8801712809279,
                            fullName : function(){
                                return this.firstName + " " + this.lastName + " is " + this.age + " old and his phone no is : " + this.phone;
                            }
                        };
                        document.getElementById("demo").innerHTML = person.fullName();
                        </script>

                        <?php
                    }
                }

                // Instantiated
                new objectMethods;
                ?>
                </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
