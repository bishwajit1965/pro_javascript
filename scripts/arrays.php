<?php require_once '../partials/top.php';?>
<!-- Code below -->
<?php
    /**
     * Class arrays
     */
class Arrays
{
    /**
     * Constructor
     */
    public function __construct()
    {
        ?>
            <!-- Declaring and displaying array elements -->
            <h3 class="heading">Practising array in Javascript </h3>
            <p class="message">Declaring and displaying array</p>

            <span class="output">Output : </span>
            <span id="demo" class="data-display"></span><br>
            <script>
            var numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
            document.getElementById('demo').innerHTML = numbers;
            </script>


            <span class="output">Output : </span>
            <span id="demo1" class="data-display"></span>
            <script>
            var fruits = ['mango', 'banana', 'apple', 'jackfruit'];
            document.getElementById('demo1').innerHTML = fruits;
            </script>

            <!-- Changing an array element -->
            <p class="message">Array item has been changed</p>
            <span class="output">Output : </span>
            <span id="demo2" class="data-display"></span><br>
            <script>
            var fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit'];
            fruits[0] = 'Sapodila';
            document.getElementById('demo2').innerHTML = fruits;
            </script>


            <!-- Accessing the last array element -->
            <p class="message">Accessing the Last Array Element (var last = fruits[fruits.length-1])</p>
            <span class="output">Output : </span>
            <span id="demo3" class="data-display"></span>
            <script>
            var fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit'];
            var last = fruits[fruits.length - 1];
            document.getElementById('demo3').innerHTML = last;
            </script>


            <!-- Use of 'for' loop -->
            <p class="message">Looping Array Elements using for loop</p>
            <span class="output">Output : </span>
            <span id="demo4" class="data-display"></span>
            <script>
            var fruits, fruitsLength, i, text;
            fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit'];
            var fruitsLength = fruits.length;
            text = '<ol>';
            for (i = 0; i < fruitsLength; i++) {
                text += '<li>' + fruits[i] + '</li>';
            }
            text += '</ol>';
            document.getElementById('demo4').innerHTML = text;
            </script>

            <!-- Use of 'forEach' loop-->
            <p class="message">Looping Array Elements using foreach loop</p>
            <span class="output">Output : </span>
            <span id="demo5" class="data-display"></span>
            <script>
            var fruits, text;
            fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit', 'Sapodilla'];
            text = '<ol>';
            fruits.forEach(myFunction);
            text += '</ol>';

            function myFunction(value) {
                text += '<li>' + value + '</li>';
            }
            document.getElementById('demo5').innerHTML = text;
            </script>

            <!-- Use of 'push' to add array element -->
            <p class="message">Adding array element using push()</p>
            <span class="output">Output : </span>
            <span id="demo6" class="data-display"></span><br>
            <button id="demo6" onClick="myFunction()" class="btn btn-sm btn-primary">Add fruit to the end </button><br><br>
            <script>
            var fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit', 'Sapodilla'];
            document.getElementById('demo6').innerHTML = fruits;

            function myFunction() {
                fruits.push('Pineapple');
                document.getElementById('demo6').innerHTML = fruits;
            }
            </script>

            <!-- Use of 'length' to add array element -->
            <p class="message">The length property provides an easy way to append new elements to an array without using the push()
                method.</p>
            <span class="output">Output : </span>
            <span id="demo8" class="data-display"></span><br>
            <button id="demo8" onClick="fruitFunction()" class="btn btn-sm btn-primary">Add fruit to the end </button><br><br>
            <script>
            var myFruits = ['Mango', 'Banana', 'Apple', 'Jackfruit', 'Sapodila'];
            document.getElementById('demo8').innerHTML = myFruits;

            function fruitFunction() {
                myFruits[myFruits.length] = 'Strawberry';
                document.getElementById('demo8').innerHTML = myFruits;
            }
            </script>

            <!-- How to recognize an array -->
            <p class="message">How to Recognize an Array</p>
            <p>A common question is: How do I know if a variable is an array?</p>

            <p>The problem is that the JavaScript operator typeof returns "object" as shown below:</p>

            <span class="output">Output : </span>
            <span id="demo9" class="data-display"></span>
            <script>
            var fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit'];
            document.getElementById('demo9').innerHTML = typeof fruits;
            </script>

            <p class="message">How to Recognize an Array using "Array.isArray()"</p>

            <span class="output">Output : </span>
            <span id="demo10" class="data-display"></span>
            <script>
            var fruits = ['Mango', 'Banana', 'Apple', 'Jackfruit'];
            document.getElementById('demo10').innerHTML = Array.isArray(fruits);
            </script>

            <!-- Multi dimensional array begins -->
            <p class="message">Multidimensional Array</p>
            <span class="output">Output : </span>
            <script>
                var array = [
                    ['Mango', 'Banana', 'Jackfruit'],//1 
                    ['Apple', 'Sapodila', 'Pineapple'],//2
                    ['Jashore', 'Khulana', 'Dhaka'],//3
                    ['Bangladesh', 'India', 'America'],//4
                ];

                // Tabular data display
                document.write('<table border=1 class="table-one">');
                document.write('<tr><td>#</td><td>Data1</td><td>Data2</td><td>Data3</td></tr>');
                var k = 1;
                for (var i = 0; i < array.length; i++) {
                    document.write('<tr>');
                        document.write('<td style="padding:10px;text-align:center;">' + k + '</td>');
                        for (let j = 0; j < 3; j++) {
                            document.write('<td>'+ array[i][j] +'</td>');
                        }
                        k++;
                    document.write('</tr>'); 
                }
                document.write('</table>');      
            </script>
            <!-- Multi dimensional array ends -->

            <!-- Array functions begins-->
            <p class="message">Array functions</p>
            <span class="output">Output : </span>
            <!--pop(), push(), shift(), unshift(), splice(position,
            length), indexOf(), Array.isArray(),
            split(), join()-->
            <script>
                var array_one = ['Bangladesh', 'India', 'Srilanka'];
                var array_two = ['Australia', 'Newzeland', 'Mayanmar'];
                var stringData = 'My name is Bishwajit Paul';
                var user = 'Bishwajit Paul';
                // var newArray = array_one.concat(array_two);
                // document.write(newArray);
                // array_one.push('Nepal');
                // array_one.pop();
                // array_one.shift();
                var arrayLength = array_one.length;
                var arrayIndex = array_one.indexOf('India'); //Output:1
                var testArray = Array.isArray(array_one);//Output:true
                document.write(stringData.split(' '));//Will return an array
                document.write('<br>');
                document.write(array_one.join(','));//Bangladesh,India,Srilanka
                // console.log(stringData.split(' '));
                document.write('<br>');
                var nameArr = user.split(' ');
                document.write('Welcome'+ ' ' + nameArr[1]);
            </script>
            <!-- Array functions ends-->

            <!-- Foreach loop begins -->
            <p class="message">Foreach loop for array</p>
            <span class="output">Output : </span>
            <script>
                var arrayData = ['Bangladesh', 'India', 'Canada', 'America', 'Bhutan', 'Nepal'];
                // arrayData.forEach(function(value, index){
                //     document.write(index +' '+ ' = ' , value + '<br/>')
                // });

                //Another way of doing the same thing
                arrayData.forEach(arrayFunction);
                function arrayFunction(val, index){
                    document.write(index +' ' + ' = ' , val + '<br/>');
                }
            </script>
            <!-- Foreach loop ends -->
        <?php
    }
}

    // Class Instantiated
    new Arrays;
?>
<?php require_once '../partials/bottom.php';?>