<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php
    class ArrowFunction
    {
        public function __construct()
        {
            ?>
            <h2 class="heading">JavaScript Arrow Functions</h2>

            <p class="dmessage">Arrow functions allow us to write shorter function syntax:</p>

            <p id="demo" class="data-display"></p>
            <script>
                hello = () => {
                    return 'Hello Bangladesh';
                }
                document.getElementById("demo").innerHTML = hello();
            </script>


            <p class="message">Only single statement can be passed in arrow function.</p>
            <p id="demo1" class="data-display"></p>
            <script>
                hello = () => 'Hello viewers !!!';
                document.getElementById('demo1').innerHTML = hello();
            </script>


            <p class="message">Parameters can also be used in arrow function.</p>
            <p id="demo2" class="data-display"></p>
            <script>
                hello = (val, val1) => 'Hello viewers !!!' + val + ' ' + val1;
                document.getElementById('demo2').innerHTML = hello(' How are you ?', ' I miss you all.');
            </script>
            <?php
        }
    }
    new ArrowFunction;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
