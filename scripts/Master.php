<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class Master
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am master template</h1>"; ?>
            <p id="demo"></p>
            <script>
                
            </script>

            <?php
        }
    }

    // Instantiated
    new Master;
    ?>
<?php require_once '../partials/bottom.php';?>
    