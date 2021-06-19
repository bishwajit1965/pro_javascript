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

                    class classCar
                    {
                        public function __construct()
                        {
                            ?>
                            <h3>JavaScript  <strong>Class</strong></h3>
                            <p id="demo"></p>
                            <!-- Create a Class -->
                            <script>
                               class Car {
                                constructor(name, year,color) {
                                    this.name = name;
                                    this.year = year;
                                    this.color = color;
                                    }
                                }

                                myCar = new Car("Ford", 2014, "green");
                                document.getElementById("demo").innerHTML =
                                myCar.name + " " + myCar.year + " color is " + myCar.color ;
                            </script>    
                            <?php
                        }
                    }

                    // Instantiated
                    new classCar;
                    ?>
                </div>
            </div>
        </div>
    <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>
