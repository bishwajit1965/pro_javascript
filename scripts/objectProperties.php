<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class ObjectProperties
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am ObjectProperties template</h1>";
           ?>
           <p id="demo"></p>
           <p id="error"></p>

            <script>
                try {
                    let person = {
                    name: "Pew",
                    title : "Paul",
                    age : 10
                };

                let text = '';
                for(let x in person) {
                    text += person[x] + ' ';
                }
                    document.getElementById("demo").innerHTML = text;
                } catch(e) {
                    document.getElementById("error").innerHTML = e;  
                    console.log(e);
                }
            </script>

           <?php 
        }
    }

    // Instantiated
    new ObjectProperties;
    ?>
<?php require_once '../partials/bottom.php';?>