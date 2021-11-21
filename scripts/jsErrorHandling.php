<?php
/**
 * Javascript error handling
 */
require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class JsErrorHandling declared
     */
    class JsErrorHandling
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>Javascript error Handling</h1>"; ?>
            <!-- Javascript error Handling -->

            <!-- 
            The try statement lets you test a block of code for errors.
            The throw statement lets you create custom errors.
            The catch statement lets you handle the error.
            The finally statement lets you execute code, after try and catch, regardless of the result. -->

            <div id="myData">Hello how are you Bangladesh?</div>
            <div id="myData1">I love you.</div>
            <button type="button" onclick="myFunction()">Try me</button>
            <p id="errorMessage"></p>

            <script>
                function myFunction(){
                    try { 
                      let putData = document.getElementById("myData").innerHTML;
                      alert(putData);
                      document.getElementById("myData1").innerHTML = putData;
                    } catch (e) {
                        document.getElementById("errorMessage").innerHTML = e.message; 
                    } 
                }
                // console.log(x);
            </script>

            <h1>Input Error validation</h1>
            <input type="text" id="inputValidation">
            <button type="button" onclick="Validate()">Validate Input</button>
            <p id="validationError"></p>
            <!-- Error validation using try catch block -->
            <script>
                function Validate(){
                    const message = document.getElementById("validationError");
                    message.innerHTML = "";
                    let data = document.getElementById("inputValidation").value;
                    try {
                        if(data == "") throw " empty";
                        if(isNaN(data)) throw " not a number";
                        // Data type castings
                        data = Number(data);
                        if (data < 5)  throw " less than five.";
                        if (data > 10)  throw " grater than ten.";
                        document.getElementById("inputValidation").value = " ";                      
                    } catch (error) {
                        message.innerHTML = "Input  is" + error;
                        document.getElementById("validationError").style.color = "red";
                        document.getElementById("validationError").style.fontSize = "small";
                        document.getElementById("inputValidation").value = " ";
                    }
                     
                }
            </script>

            <!-- Input validation using try catch block as well as finally -->

            <input type="text" name="" id="validateInput">
            <button type="button" onclick="ValidateInputData()">Validate Input data</button>
            <p id="inputError"></p>

            <script>
                function ValidateInputData(){
                    const y = document.getElementById("inputError");
                    y.innerHTML = "";

                    let x = document.getElementById("validateInput").value;

                    try {
                        x = Number(x)
                        if(x == "") throw " blank. ";
                        if(isNaN(x)) throw " not a number.";
                        if(x < 5) throw " too small. ";
                        if(x >10) throw " too large. ";
                        
                    } catch (error) {
                       y.innerHTML = "Input is "+ error;
                    }
                    // Executes the code after try catch block
                    finally {
                        document.getElementById("validateInput").value = "";
                    }
                }
            </script>
        

            <?php
        }
    }

    // Instantiated
    new JsErrorHandling;
    ?>
<?php require_once '../partials/bottom.php';?>