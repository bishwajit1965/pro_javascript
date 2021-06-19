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

                    class ObjectAccessors
                    {
                        public function __construct()
                        {
                            ?>
                            <h3>Object accessor using <strong>get</strong></h3>
                            <p id="demo"></p>
                            <script>
                                // Create an object:
                                var person = {
                                  firstName: "Arpita",
                                  lastName : "Paul",
                                  language : "English",
                                  email : "arpita@gmail.com",
                                  phone : +8801712809279,
                                  get Data() {
                                    return this.firstName + " " + this.lastName + " studies " +this.language + " and her email is " + this.email;
                                  }
                                };
                                // Display data from the object using a getter:
                                document.getElementById("demo").innerHTML = person.Data;
                            </script>

                            <h3>Object accessor setting using <strong>set</strong></h3>
                            <p id="demo1"></p>
                            <p id="demo2"></p>
                            <script>
                                var person = {
                                    firstName : ' ',
                                    lastName: ' ',
                                    set data (value) {
                                        this.firstName = value.toUpperCase();
                                    }
                                };
                                person.data = 'Arpita';
                                document.getElementById('demo1').innerHTML = person.firstName;
                            </script>
                            <?php
                        }
                    }

                    // Instantiated
                    new ObjectAccessors;
                    ?>
                </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
