<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php

    class BomWindow
    {
        public function __construct()
        {
            ?>
            <!-- Code below -->
            <h3 class='heading'>Function Invocation Result :</h3>
            <p id="demo" class="data-display"></p>
            
            <script>
                var w = window.innerWidth
                || document.documentElement.clientWidth
                || document.body.clientWidth;

                var h = window.innerHeight
                || document.documentElement.clientHeight
                || document.body.clientHeight;
                // document.getElementById('demo').innerHTML = 'Screen width :' + w + '<br>'+ ' ' + 'Screen height :' + window.height;
                var x = document.getElementById("demo");
                x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
            </script>
            
            <p id="demo1" style="color:red;font-size:30px;font-weight:900;"></p>

            <script>
            var myVar = setInterval(myTimer, 1000);

            function myTimer() {
              var d = new Date();
              document.getElementById("demo1").innerHTML = d.toLocaleTimeString();
            }
            </script>

            <!-- Code above -->
            <?php
        }
    }
    new BomWindow;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
