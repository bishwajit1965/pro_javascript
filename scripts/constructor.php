<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
        echo "File path: " .__FILE__."<hr>";
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
            echo "<h1>I am Constructor template</h1>"; ?>
            <p id="error"></p>
            <p id="demo">1000</p>
            <form action="">
                <input type="number" value="500" name="data"  id="demoTwo">
                <input type="submit" onclick="myFunction()" name="submit" value="Test">
            </form>
            <p id="demo1"></p>
            <p id="demo4"></p>
            <p id="demo5"></p>

            <div id="div1">
                <p id="p1">My name is Bishwajit</p>
                <p id="p2">Hello how are you.</p>
            </div>

            <input type="submit" name="submit" onclick="funOne()" value="submit">

            <script>
                function myFunction () {
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
                        // console.log($obj); 

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
                }
            </script>
            <script>
                function funOne() {
                    const para = document.createElement('p');
                    const data = document.createTextNode("Hello Bangladesh");
                    para.appendChild(data);

                    const element = document.getElementById("div1");
                    const child = document.getElementById("p1");
                    // const outPut = element.insertBefore(para, child);
                   element.replaceChild(para,child);
                    // console.log(outPut); 
                }

            </script>

            <?php
        }
    }

    // Instantiated
    new Constructor;
    ?>
<?php require_once '../partials/bottom.php';?>
    