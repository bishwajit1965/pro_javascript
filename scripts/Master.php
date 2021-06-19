<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
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
            echo "<h1>I am master template</h1>";
        }
    }

    // Instantiated
    new Master;
    ?>
<?php require_once '../partials/bottom.php';?>
    