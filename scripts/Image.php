<?php require_once '../partials/_head.php';?>

<body>
    <div class="container">
        <?php require_once '../partials/_header.php';?>
        <div class="row">
            <?php require_once '../partials/_sidebar.1.php';?>
            <div class="col-sm-9">
                <div class="row result">
                    <!-- Code below -->
                    <?php
                    /**
                     * Onmouseover and onmouseout javascript event
                    */
                    class Image
                    {
                        /**
                         * Constructor
                         */
                        public function __construct()
                        {
                            ?>

                    <img src="../images/sunflower.jpg" onmouseover="makeBig(this)" 
                        onmouseout="makeSmall(this)"
                        alt="Img_big_small" id="image">

                    <script>
                        function makeSmall(x) {
                            x.style.height = '150px';
                            x.style.width = '150px';
                        }

                        function makeBig(x) {
                            x.style.height = '370px';
                            x.style.width = '850px';
                        }
                    </script>
                    <?php
                        }
                    }
                    new Image;
                    ?>
                </div>
            </div>
        </div>
        <?php require_once '../partials/_footer.php'; ?>
    </div>
</body>

</html>