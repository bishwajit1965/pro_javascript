<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    echo "File path: " .__FILE__."<hr>";

    /**
     * Class declared
     */
    class JsMap
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am master template</h1>"; ?>
            <p id="demo"></p>
            <p id="demo1"></p>
            <p id="demo2"></p>
            <p id="demo3"></p>
            <p id="demo4"></p>
            <p id="demo5"></p>
            <p id="demo6"></p>
            <p id="demo7"></p>
            <p id="demo8"></p>
            <!-- A Map holds key-value pairs where the keys can be any datatype. -->

            <!-- A Map remembers the original insertion order of the keys. -->

            <!-- A Map has a property that represents the size of the map. -->
            <script>
                const fruits = new Map([
                    ['Apples', 500],
                    ['Banana', 400],
                    ['Data','Hello Bangladesh']
                    ]);

                document.getElementById("demo").innerHTML = fruits.get('Apples') + '<br>' + fruits.get('Banana') + '<br>' +fruits.get('Data') + '<br>';
                
            </script>

            <!-- Map.set() -->
            <script>
                const fruit = new Map();

                fruit.set('Guave', 250);
                fruit.set('Coconut', 250);
                fruit.set('Pineapple', 400);
                // fruit.delete('Pineapple');

                document.getElementById("demo1").innerHTML = fruit.get('Guave') + '<br>' + fruit.get('Coconut') + '<br>'+ fruit.get('Pineapple');
                // Size
                const size = fruit.size;
                console.log(size);
            </script>

            <!-- clear()  Removes all the elements from a Map -->
            <script>
                const books = new Map();

                books.set('novels', 10);
                books.set('fiction', 15);
                books.set('drama', 20);

                document.getElementById("demo2").innerHTML = books.get('novels') + '<br>' + books.get('fiction') + '<br>' + books.get('drama') + '<br>';

                // Removes all the elements from a Map
                // books.clear();

                // document.getElementById("demo2").innerHTML = 'Books size is: '+ ' '+ books.size;
            </script>

            <!-- Map.has() -->
           <p id="demo"></p>

           <script>
               // Create a Map
               const fruitTwo = new Map([
                 ["apples", 500],
                 ["bananas", 300],
                 ["oranges", 200]
               ]);
               // Map.gforEach()
               let textThree = "";
               fruitTwo.forEach (function(value, key) {
                 textThree += key + ' = ' + value + "<br>"
               });
               document.getElementById("demo4").innerHTML = 'Result of Map.forEach() =' + '<br>' + textThree;

                // Map.values()
                let total = 0;
                for (const x of fruitTwo.values()) {
                  total += x;
                }
               document.getElementById("demo5").innerHTML = 'Result opf Map.values() =' + total;

               // Map.keys()
               let veggies = '';
               for(const v of fruitTwo.keys()){
                veggies += v + '<br>';
                document.getElementById("demo6").innerHTML = 'The keys are: <br>' + ' ' + veggies;

                }
                // Map.entries()
                let entries = '';
                for(const n of fruitTwo.entries()){
                    entries += n + '<br>';
                    document.getElementById("demo7").innerHTML = 'The entries are: <br>' + entries;
                }
            </script>

            <!-- Objects as Keys -->
            <script>
                //Create objects
                const phone = {name: 'Phones'};
                const pen = {name: 'Pen'};
                const book = {name: 'Book'};
                //Create a Map
                const objects = new Map();
                // Map.set()
                objects.set(phone, 200);
                objects.set(pen, 400);
                objects.set(book, 600);
                document.getElementById("demo7").innerHTML = 'Mapped object value: <br>' + objects.get(phone) + '<br>' + objects.get(pen) + '<br>' + objects.get(book);
            </script>


            <?php
        }
    }

    // Instantiated
    new JsMap;
    ?>
<?php require_once '../partials/bottom.php';?>
    