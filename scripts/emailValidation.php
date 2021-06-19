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
                     * Email validation
                     */
                    class EmailValidation
                    {
                        /**
                         * Email sending form
                         */
                        public function __construct()
                        {
                            ?>
                            <div><h2 style="color:#555;font-weight: 800;">Email validation</h2></div>

                            <form action="" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="Email"></label>
                                    <input type="text" name="email" id="email-input" onkeyup="validateEmail()">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </form>
                            <?php
                        }
                    }

                    // Instantiated
                    new EmailValidation;
                    ?>
                    <p id="error"></p>
                    <script>
                        try {
                            function validateEmail() {
                            var getEmail = document.getElementById('email-input');
                            var email = getEmail.value;
                            var emailRegularExpression = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
                                getEmail.style.color = 'white';
                                if (emailRegularExpression.test(email)) {
                                    getEmail.style.backgroundColor = "#008000";
                                } else {
                                    getEmail.style.backgroundColor = "#FF0000";
                                }
                            }    
                        } catch(e) {
                            // statements
                            document.getElementById("error").innerHTML = e.message;
                            console.log(e);
                        }
                        
                    </script>
                </div>
            </div>
        </div>
    <?php require_once '../partials/_footer.php';?>
    </div>
</body>
</html>
