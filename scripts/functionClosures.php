<?php include_once '../partials/_head.php';?>
<body>
    <div class="container">
    <?php include_once '../partials/_header.php';?>
        <div class="row">
        <?php include_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result">

                    <!-- Code below -->
                    <?php

                    class FunctionClosures
                    {
                        public function __construct()
                        {
                            ?>
                            <button type="button" onclick="myFunction()">Count</button>

                            <p id="demo">0</p>

                            <script>
                            var add = (function () {
                             var counter = 0;
                             return function () {
                                counter += 1;
                                return counter;
                            }})();

                            function myFunction(){
                             document.getElementById("demo").innerHTML = add();
                            }
                            </script>

                            <?php
                        }
                    }

                    // Instantiated
                    new FunctionClosures;
                    ?>
                </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
