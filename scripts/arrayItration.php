<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class ArrayItration
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am array itration template</h1>";
            ?>
            <!-- Array Itration -->
            <h4>Array Itration</h4>
            <p id="demo"></p>

            <script>
                const numbers = [1, 3, 5, 7, 9, 11];
                let arrayData = '';

                numbers.forEach(myFunction);
                document.getElementById("demo").innerHTML = arrayData;

                function myFunction(value){
                    arrayData +=value + "<br>";
                }
            </script>
            <!-- ###################################################### -->

            <!-- Array Map -->
            <h4>Array Map</h4>
            <p id="demoOne"></p>

            <p>Note that the function takes 3 arguments:</p>
            <p>The item value</p>
            <p>The item index</p>
            <p>The array itself</p>
            
            <p> When a callback function uses only the value parameter, the index and array parameters can be omitted as in the following:</p>

            <script>
                const number1 = [100, 200, 300, 400, 500];
                const number2 = number1.map(functionTwo);

                document.getElementById("demoOne").innerHTML= number2;

                function functionTwo(value, index, array){
                    return value ;
                }
                
            </script>

            <p id="demoThree"></p>
            <script>
                const number3 = [10, 20, 30, 40, 50];
                const number4 = number3.map(functionThree);

                document.getElementById("demoThree").innerHTML= number4;

                function functionThree(value){
                    return value ;
                }
                
            </script>


            <!-- ###################################################### -->
            <h4>Array Filter using Array.filter()</h4>
            
            <p>The filter() method creates a new array with array elements that passes a test.</p>
            <p>This example creates a new array from elements with a value larger than 15</p>:
            <p id="demoFour"></p>
             
            <script>
                const number5 =[14, 15, 17, 18, 19, 20];
                const over15 = number5.filter(functionFour);
                document.getElementById("demoFour").innerHTML=over15;

                function functionFour(value, index, array){
                    return  value > 15;
                }

            </script>


            <!-- ###################################################### -->
            <!-- Four pareamwter example -->
            <h4>Array reduce.reduce()</h4>
            <p>The reduce() method runs a function on each array element to produce (reduce it to) a single value.</p>
            <p>The reduce() method works from left-to-right in the array. See also reduceRight()</p>.
            <p>The reduce() method does not reduce the original array.</p>
            <p id="demoFive"></p>
            
            <script>
                const number6 =[14, 15, 17, 18, 19, 20];
                const over16 = number5.reduce(functionFive);
                document.getElementById("demoFive").innerHTML=over16;

                function functionFive(total, value, index, array){
                    return  total + value;
                } 
            </script>
            <!-- Two pareamwter example -->
            <p id="demoSix"></p>
             
            <script>
                const number7 =[14, 15, 17, 18, 19, 20, 30, 49];
                const over17 = number7.reduce(functionSix);
                document.getElementById("demoSix").innerHTML=over17;
                // The function can take two parameters also, here(total + value)
                function functionSix(total, value){
                    return  total + value;
                } 
            </script>

            <!-- Two pareamwter value and an initial value ad the third parameter -->
            <p id="demoSeven"></p>
            <p id="total"></p>
             
            <script>
                const number8 =[10, 12, 14, 15, 17, 18, 19, 20, 30, 49, 50, 60];
                // Initial value 100 here
                const over18 = number8.reduce(functionSeven, 100);
                document.getElementById("demoSeven").innerHTML= over18;

                // The function can take two parameters also, here(total + value)
                function functionSeven(total, value){
                    return total + valuess ;
                } 
            </script>

            <!-- ###################################################### -->
            <h4>Array.reduceRight()</h4>
            <p>The reduceRight() method runs a function on each array element to produce (reduce it to) a single value.</p>
            <p>The reduceRight() works from right-to-left in the array. See also reduce().</p>.
            <p>The reduceRight() method does not reduce the original array.</p>

            <p id="demoEight"></p>
            
            <script>
                const number9 =[14, 15, 17, 18, 19, 20, 25, 27, 30];// Output :185
                const sum = number9.reduceRight(functionEight);
                document.getElementById("demoEight").innerHTML=sum;

                function functionEight(total, value, index, array){
                    return  total + value;
                } 
            </script>


           <!-- The above programme has taken 4 parameters but has used 2. So , it can be written like -->
           <h4>Array.reduceRight() alternative coding but same output</h4>
            <p id="demoNine"></p>
            
            <script>
                const number10 =[14, 15, 17, 18, 19, 20, 25, 27, 30];// Output :185
                const sum1 = number10.reduceRight(functionNine);
                document.getElementById("demoNine").innerHTML=sum1;

                function functionNine(total, value){
                    return  total + value;
                } 
            </script>

            <!-- ###################################################### -->
            <h4>Array.some()</h4>
            <p>The some() method check if some array values pass a test.</p>

            <p>This example check if some array values are larger than 18:</p>
            <p id="demoTen"></p>

            <script>
                const number11 = [12, 14, 15, 18, 20, 32, 45,65, 54];
                const sum2 = number11.some(functionTen);
                let messageData = "Some over eighteen is ";
                document.getElementById("demoTen").innerHTML = messageData  + sum2;
                document.getElementById("demoTen").style.color = "red";
                document.getElementById("demoTen").style.fontSize = 'large';

                function functionTen(value, index, array){
                    return value > 18;
                }
            </script>
            <!-- ###################################################### -->
            <?php
        }
    }

    // Instantiated
    new ArrayItration;
    ?>
<?php require_once '../partials/bottom.php';?>
    