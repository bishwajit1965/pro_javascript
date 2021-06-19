<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class Hoisting
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Hoisting template</h1>";
            ?>
            
            
            <p id="demo"></p>
            <p id="demo2"></p>
            <p id="demo3"></p>
            <p id="demo4"></p>
            <script>
                
                function hello()
                {
                   document.getElementById('demo').innerHTML = 'Hello dear, how are you ?';
                   document.getElementById("demo2").innerHTML = 'Hello I love you very much';
                   document.getElementById("demo3").innerHTML = 'My name is Bishwajit Paul';
                }
               
                hello();

                const Person = {
                    firstName : "Bishwajit",
                    lastName: "Paul",

                    fullName : function() {
                        return this.firstName + "  " + this.lastName;
                    }
                }
                document.getElementById("demo4").innerHTML = Person.fullName();
            </script>

            <?php
        }
    }

    // Instantiated
    new Hoisting;
    ?>
<?php require_once '../partials/bottom.php';?>
    