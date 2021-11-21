<?php include_once('../partials/_head.php'); ?>
<body>
    <div class="container">
    <?php include_once('../partials/_header.php'); ?>
        <div class="row">
        <?php include_once('../partials/_sidebar.1.php'); ?>
            <div class="col-sm-9">
                <div class="row result">

                    <!-- Code below -->
                    <?php
                    class jsHtmlDom
                    {
                        public function __construct()
                        {
                            ?>
                            <!-- DOCUMENT OBJECT MODEL CHANGED -->
                            <p id="demo"></p>
                            <script>
                                document.getElementById("demo").innerHTML = "Hello Bangladesh how are you?";
                            </script>

                            <div class="trial">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>

                            <div class="trial">2Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                            <p id="demo1"></p>
                            <script>
                                var x = document.getElementsByClassName("trial");
                                document.getElementById("demo1").innerHTML = 'Hello' + x[1].innerHTML;
                            </script>

                            <?php
                        }
                    }

                    //Class instantiated
                    new jsHtmlDom;

                    //Code above
                    ?>
                </div>
            </div>
        </div>
        <?php include_once '../partials/_footer.php'; ?>
    </div>
</body>
</html>
