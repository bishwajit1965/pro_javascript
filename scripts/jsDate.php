<?php
/**
 * Partials/top.php included 
 */
require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class JsDate
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am javascript date template</h1>"; ?>
            <p id="demo"></p>
            <script>
                //Four ways of creating javascript date
                //new Date()
                //new Date(year, month, day, hours, minutes, seconds, milliseconds)
                //new Date(milliseconds)
                //new Date(date string)
                const d = new Date();
                document.write(d.toDateString());
                document.write('<br/>');
                document.write(d.getHours());
                document.write('<br/>');

                // Comparing dates
                let text ='';
                const toDay = new Date();
                const someDay = new Date();
                someDay.setFullYear(2100, 0, 10);
                if (someDay > toDay) {
                    text = 'Today is before January 10 2100';
                } else{
                    text = 'Today is after January 10 2100';
                }
                document.write(text);
            </script>

            <?php
        }
    }

    // Instantiated
    new JsDate;
    ?>
<?php require_once '../partials/bottom.php';?>
    