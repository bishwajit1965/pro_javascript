<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class Input
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Input template</h1>"; ?>
            <p id="validationError"></p>   
            <form class="form" id="myForm">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">First Name</label>
                      <input type="text" class="form-control" name="first_name" id="f_name" placeholder="First name..." onkeyup="formValidation()">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Last name">Last Name</label>
                      <input type="text" class="form-control" name="last_name" id="l_name" placeholder="Last nane...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
                    </div>
                </div>
            </form>
            <script>
                try {
                    function formValidation() {
                        let getFirstName = document.getElementById("f_name");
                        let firstName = getFirstName.value;
                        var pattern =/[a-zA-Z0-9_*$]/;
                        getFirstName.style.backgroundColor = "#FFF";
                        if (firstName.match(pattern)) {
                            getFirstName.style.color = "#FFFFFF";
                            getFirstName.style.backgroundColor = "#13E76D";
                        } else {
                            // document.write("Pattern mismatch");
                            getFirstName.style.backgroundColor = "#FF8888"; 
                        } 
                    }
                } catch(e) {
                    document.getElementById("validationError").innerHTML = e.message;
                    // statements
                    console.log(e);
                }
            </script>

            <?php
        }
    }

    // Instantiated
    new Input;
    ?>
<?php require_once '../partials/bottom.php';?>
    
