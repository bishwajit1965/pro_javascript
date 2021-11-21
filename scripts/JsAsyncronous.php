<?php require_once '../partials/top.php'; ?>
<!-- Code below -->
<?php
echo "File path: " . __FILE__ . "<hr>";

/**
 * Class declared
 */
class JsAsynchronous
{
    /**
     * Constructor
     */
    public function __construct()
    {
        echo "<h1>I am Javascript Asynchronous template</h1>"; ?>
        <h4>Javascript asynchronous means I will finish later. setTimeout() function is a good example of asynchronous Js</h4>
        <p id="demo"></p>
        <script>
            setTimeout(myFunction, 4000);

            function myFunction() {
                document.getElementById("demo").innerHTML = "I am asynchronous data waiting for four seconds.";
                document.getElementById("demo").style.color = "red";
            }
        </script>

<?php
    }
}

// Instantiated
new JsAsynchronous;
?>
<?php require_once '../partials/bottom.php'; ?>