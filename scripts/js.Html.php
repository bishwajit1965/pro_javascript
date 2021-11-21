<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class Master
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am Javascript Html template</h1>"; ?>
            <p id="demo"></p>
            <p id="demo1"></p>
            <p id="demo3"></p>
            <!-- <script>
                var arr = ['Dhaka', 'Rajshahi', 'Chittagong', 'Barishal', 'Khulna'];
                arr.sort();
                let html = "<select><option>Select Data</option>";
                    
                     for(var i = 0, length1 = arr.length; i < length1; i++){
                    html = html + "<option>"+ arr[i] + "</option>";
                }
                html+= "</select>";
                // document.getElementById("demo").innerHTML = html;
                document.write(html);
            </script> -->
            <script>
                let z = ['Bangladesh', 'India', 'Japan', 'Korea', 'Srilanka', 'America'];
                z.sort();
                let html = "<select><option>Select data</option>";
                   for(var i = 0, length1 = z.length; i < length1; i++){
                        html = html + "<option>"+ z[i] + "</option>";
                    } 
                html+="</select>";
                // document.getElementById("demo1").innerHTML = x;
                document.write(html);
            </script>
            <script>
                // Constructor
                function Person (name, address) {
                    this.perName = name;
                    this.perAddress = address;
                };

                // Prototype
                Person.prototype.age = 50;
                const person = new Person('Bishwajit', 'Jashore');
                document.getElementById("demo3").innerHTML = person.perName+ person.perAddress + person.age;
            </script>
            <?php
        }
    }

    // Instantiated
    new Master;
    ?>
<?php require_once '../partials/bottom.php';?>
    