<?php require_once '../partials/top.php'; ?>
<!-- Code below -->
<?php
echo "File path: " . __FILE__ . "<hr>";

/**
 * Class declared
 */
class JsCallBacks
{
    /**
     * Constructor
     */
    public function __construct()
    {
        echo "<h1>I am javascript Call back template</h1>"; ?>
        <h4>Javascript call backs</h4>
        <!-- Note -->
        <h4>Note :</h4>
        <p>A callback is a function passed as an argument to another function</p>
        <p>This technique allows a function to call another function</p>
        <p>A callback function can run after another function has finished</p>


        <p>JavaScript functions are executed in the sequence they are called. Not in the sequence they are defined.</p>
        <p>This example will end up displaying "Hello I am the second display function":</p>
        <hr>

        <p id="demo"></p>
        <script>
            function displayCallback(someText) {
                document.getElementById("demo").innerHTML = "Output : " + " " + someText;
                document.getElementById("demo").style.color = "red";

            }

            function displayFirst() {
                displayCallback("Hello I am the first display function");
            }

            function displaySecond() {
                displayCallback("Hello I am the second display function");
            }

            // Call the functions
            displayFirst();
            displaySecond()
        </script>
        <hr>
        <!-- Sequence Control -->
        <h4>Sequence Control</h4>
        <p id="demo1"></p>

        <script>
            function Calculate(data) {
                document.getElementById("demo1").innerHTML = "The summation is: " + data;
                document.getElementById("demo1").style.color = "red";
            }

            function calculate(num1, num2) {
                let sum = num1 + num2;
                return sum;
            }
            let result = calculate(5, 5);
            Calculate(result);
        </script>

        <!-- Another alternative using a function as callback as an argument -->
        <h4>Another way of using a callback as an argument in a function</h4>
        <p id="demo2"></p>
        <script>
            function Calculator(result) {
                document.getElementById("demo2").innerHTML = "The summation is: " + result;
                document.getElementById("demo2").style.color = "red";

            }
            // CallBack is a function here without parenthesis
            // If parenthesis is added it will generate error
            function calculateNum(num1, num2, CallBack) {
                let sum = num1 + num2;
                CallBack(sum);
            }
            calculateNum(15, 25, Calculator);
        </script>

<?php
    }
}

// Instantiated
new JsCallBacks;
?>
<?php require_once '../partials/bottom.php'; ?>