<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class AnonymousFunction
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am AnonymousFunction template</h1>"; ?>
            <p id="demo"></p>
            <script>
                (function(x,y){
                	var z = x * y;
                	document.write(z);
                })(10, 10);
                (function(){
                	var a = "Bangladesh ";
                	document.write(a);
                })();
                (function(){
                	var a = "I love you ";
                	document.write(a);
                })();
            </script>

            <?php
        }
    }

    // Instantiated
    new AnonymousFunction;
    ?>
<?php require_once '../partials/bottom.php';?>
    
