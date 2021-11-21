<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class JsObjectSets
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Javascript Object Sets template</h1>"; ?>
            <p id="demo"></p>
            <p id="demo1"></p>
            <p id="demo2"></p>
            <p id="demo3"></p>
            <p id="demo4"></p>
            <p id="demo5"></p>
            <p id="demo6"></p>
            <script>
                const letters = new Set(['a', 'b', 'c', 'd',]);
                letters.add("e");
                letters.add("f");
                document.getElementById("demo").innerHTML = 'The size of the array is: ' + ' ' + letters.size;
            </script>

            <!-- Create a set and then variables -->
            <script>
                //variables created
                const a = 'a';
                const b = 'b';
                const c = 'c';
                const d = 'd';
                const e = 'e';
                //New set is created
                const alphabets = new Set();
                //Variables added
                alphabets.add(a);
                alphabets.add(b);
                alphabets.add(c);
                alphabets.add(d);

                document.getElementById("demo1").innerHTML = 'The size of the alphabets is: ' + ' ' + alphabets.size;
            </script>

            <!-- The forEach() Method -->
            <script>
                //Create a set
                const data = new Set(['a', 'b', 'c', 'd', 'e']);
                // List all elements
                let text = '';
                data.forEach(function(value){
                    text += value + '<br>';
                });
                document.getElementById("demo2").innerHTML = 'The values are: '+ '<br>' + text;
            </script>

            <!-- The values() Method -->
            <script>
                // Create a Set
                const lettersData = new Set(["h","i","j"]);
                const y = lettersData.values();
                // List all Elements
                let textOne = "";
                for (const x of y) {
                  textOne += x + "<br>";
                }
                document.getElementById("demo4").innerHTML = textOne;
                // Reyurns type
                document.getElementById("demo5").innerHTML = typeof letterData;
            </script>
            <?php
        }
    }
    // Instantiated
    new JsObjectSets;
    ?>
<?php require_once '../partials/bottom.php';?>
    