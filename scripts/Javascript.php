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
                 * Class javascript
                 */
                class Javascript
                {
                    /**
                     * Constructor
                     */
                    public function __construct()
                    {
                        ?>
                        <p id="demo"></p>
                        <p id="demo2"></p>
                        <p id="demo3"></p>
                        <p id="demo4"></p>

                        <script>

                            function myFunction(p1, p2){
                                return p1 * p2;
                            }

                            document.getElementById("demo").innerHTML = myFunction(10, 10);

                            var car = {type:"Fiat", model:"Toyota", price:"500000"}

                            document.getElementById("demo2").innerHTML = car.type+ ' ' + car.model + ' ' + car.price;

                            document.getElementById("demo3").innerHTML = car.model;

                            document.getElementById("demo4").innerHTML = car.price;

                        </script>
                        <script>
                            function displayDate(){
                                document.getElementById('time').innerHTML= Date();
                            }
                        </script>
                        <p id="time"></p>
                        <button onclick="displayDate()">The time is?</button><br>

                        <button onclick="document.getElementById('test').innerHTML = Date()">The time is?</button>
                        <p id="test"></p>

                        <button onclick="this.innerHTML= Date()">The time is?</button>

                        <p onmouseover="this.style.color='red';">Change my color</p>
                    <?php }
                }
                // Instantiated
                new Javascript;
                ?>
                </div>
            </div>
        </div>
    <?php require_once '../partials/_footer.php';?>
    </div>
</body>
</html>
