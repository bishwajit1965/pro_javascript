<?php require_once '../partials/_head.php';?>
<body>
    <div class="container">
    <?php require_once '../partials/_header.php';?>
        <div class="row">
        <?php require_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result">
                <!-- Code below -->
                <script>
                    try {
                        function validateForm() {
                            var x = document.forms["myForm"]["fname"].value;
                            if (x == "") {
                                alert("First name must be filled out !");
                                return false;
                            }
                            var y = document.forms["myForm"]["lname"].value;
                            if (y == "") {
                                alert("Last name must be filled out !");
                                return false;
                            }

                            if (x !="" && y !=""){
                                alert("Data has been submitted successfully !!!");
                            }
                        }
                    } catch(e) {
                        // statements
                        console.log(e);
                    }
                    
                </script>
                <?php
                /**
                 * Onmouseover and onmouseout javascript event
                 */
                class FormValidation
                {
                    /**
                     * Validate form data
                     */
                    public function __construct()
                    {
                        ?>
                        <form action="" method="post" name="myForm" onsubmit="return validateForm()">
                            <div class="form-group">
                                <label for="fname">First name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <button type="submit" name="submit" class="btn btn-md btn-primary"> Submit</button>
                        </form>
                        <?php
                    }
                }

                new FormValidation;
                ?>
                </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
