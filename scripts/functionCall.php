<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php
    class FunctionCall
    {
        public function __construct()
        {
            ?>
            <h2 class="heading">JavaScript Functions</h2>

            <p class="data-display">In HTML the value of <b>this</b>, in a global function, is the window object.</p>

            <p id="demo" class="data-display"></p>
            
            <script>
                var x = myFunction();
                function myFunction(){
                    return this;
                }
                document.getElementById("demo").innerHTML =x;
            </script>
            <?php
        }
    }
    new FunctionCall;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
