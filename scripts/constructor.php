<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class Constructor
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Constructor template</h1>";

            ?>
            <p id="error"></p>
            <p id="demo">1000</p>
            <form action="">
                <input type="number" value="200" name="data" id="demoTwo">
            </form>
            <p id="demo1"></p>
            <p id="demo4"></p>
            <script>
                try {
                    function User(fn, ln){
                        this.fname = fn;
                        this.lname = ln;
                    }
                    this.fullName= function(){
                        return this.fname + " " + this.lname;
                    }
                    var $obj = new User('Bangla', 'English');
                    document.getElementById("demo").innerHTML = $obj.fname + " " + $obj.lname;
                    console.log($obj); 

                    // Getting the value
                    
                    var x = document.getElementById("demoTwo");
                    var y = x.value;
                    if (y == 0) {
                        document.getElementById("demo4").innerHTML = "No data found";
                    } else {
                        document.getElementById("demo1").innerHTML = y;
                    }
  
                } catch(errorAny) {
                    // statements
                    document.getElementById("error").innerHTML = errorAny.message;
                    console.log(errorAny);
                }
                
                
            </script>

            <?php
        }
    }

    // Instantiated
    new Constructor;
    ?>
<?php require_once '../partials/bottom.php';?>
    