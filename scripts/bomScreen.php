<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php

    class BomScreen
    {
        public function __construct()
        {
            ?>
            <!-- Code below -->
            <h3 class='heading'>Function Invocation Result :</h3>
            <p id="demo" class="data-display"></p>
            
            <script>
                document.getElementById('demo').innerHTML = 'Screen width :' + screen.width + '<br>'+ ' ' + 'Screen height :' + screen.height;
            </script>
            <!-- Code above -->
            <?php
        }
    }
    new BomScreen;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
