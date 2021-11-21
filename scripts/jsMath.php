<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class Math
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Javascript Math template</h1>"; ?>
            <p id="demo"></p>
            <script>
                const m = Math.E;
                const p = Math.PI;
                const srt = Math.SQRT2;
                const squareRoot = Math.SQRT1_2;
                const mathRound = Math.round(4.8);
                const mathCeil = Math.round(4.8);
                const mathFloor = Math.floor(4.8);
                const mathPower = Math.pow(4, 3);
                const mathSquareRoot = Math.sqrt(6);
                const mathRandom = Math.random();
                document.write('The output is: ' + m);
                document.write('<br/>');
                document.write('The output is: ' + p);
                document.write('<br/>');
                document.write('The output is: ' + srt);
                document.write('<br/>');
                document.write('The output is: ' + squareRoot);
                document.write('<br/>');
                document.write('The output of math round is: ' + mathRound);
                document.write('<br/>');
                document.write('The output of math ceil is: ' + mathCeil);
                document.write('<br/>');
                document.write('The output of math floor is: ' + mathFloor);
                document.write('<br/>');
                document.write('The output of math power is: ' + mathPower);
                document.write('<br/>');
                document.write('The output of math square root is: ' + mathSquareRoot);
                document.write('<br/>');
                document.write('The output of math srandom is: ' + mathRandom);
            </script>

            <?php
        }
    }

    // Instantiated
    new Math;
    ?>
<?php require_once '../partials/bottom.php';?>
    