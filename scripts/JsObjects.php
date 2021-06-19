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

                class JsObjects
                {
                    public function __construct()
                    {
                        echo "<h3 class='heading'>Javascript objects</h3>";
                        echo '&lt;p&gt;';
                        echo "Bangladesh";
                        echo '&lt;/p&gt;';
                        echo '';
                        ?>
                        <p id="demo"></p>
                        <p id="demo1"></p>
                        <script>
                            // Object creation
                            var person = {
                                firstName : "Bishwajit",
                                lastName : "Paul",
                                eyeColor : "black",
                                age : 55,
                                // Object method
                                fullName : function() {
                                    return this.firstName + " " + this.lastName + " " + this.age;
                                }
                            };
                            // Object property accessed
                            document.getElementById("demo").innerHTML = person.firstName + " " + person.lastName + " " + person["age"];
                            // Method called
                            document.getElementById("demo1").innerHTML = person.fullName();
                        </script>

                        <?php
                    }
                }

                // Instantiated
                new JsObjects;
                ?>
                <!-- Code above -->
            </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
