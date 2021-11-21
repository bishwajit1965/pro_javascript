<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class ArrayDropDownInJs
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am ArrayDropDownInJs template</h1>"; ?>
            <p id="demo"></p>
            <script>
                var arr = ['Dhaka', 'Rajshahi', 'Chittagong', 'Barishal', 'Khulna'];
                arr.sort();
                var html = "<select><option>Select City</option>";
                for(var i = 0, length1 = arr.length; i < length1; i++){
                	html = html + "<option>"+ arr[i] + "</option>";
                }
                html = html+ "</select>";
                document.write(html);
            </script>

            <?php
        }
    }

    // Instantiated
    new ArrayDropDownInJs;
    ?>
<?php require_once '../partials/bottom.php';?>
    
