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
                    class FunctionApply
                    {
                        /**
                         * Function apply
                         */
                        public function __construct()
                        {
                            ?>
                            <p id="demo"></p>

                            <script>
                            var person = {
                              fullName: function() {
                                return this.firstName + " " + this.lastName;
                              }
                            }
                            var person1 = {
                              firstName: "Pew",
                              lastName: "Paul"
                            }
                            var x = person.fullName.apply(person1);
                            document.getElementById("demo").innerHTML = x;
                            </script>
                            <?php
                        }
                    }

                    // Instantiated
                    new FunctionApply;
                    ?>
                    <!-- Code above -->
                </div>
            </div>
        </div>
    <?php require_once '../partials/_footer.php';?>
    </div>
</body>
</html>
