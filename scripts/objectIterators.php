<?php require_once '../partials/top.php'; ?>
<!-- Code below -->
<?php
echo "File path: " . __FILE__ . "<hr>";

/**
 * Class declared
 */
class ObjectIterators
{
    /**
     * Constructor
     */
    public function __construct()
    {
        echo "<h1>I am object iterator template</h1>"; ?>
        <!-- String Iteration -->
        <h4>Iterating over a string</h4>
        <p id="demo"></p>
        <script>
            const name = "Bangladesh";
            let text = "";
            for (const x of name) {
                text += x + "<br>";
            }
            document.getElementById("demo").innerHTML = "The output is : " + "<br>" + text;
            document.getElementById("demo").style.color = "red";
        </script>

        <!-- Array Iteration -->
        <h4>Iterating over an array</h4>
        <p id="demo1"></p>
        <script>
            const arr = ['1', '2', '3', '4', '5'];
            let letters = '';
            for (const y of arr) {
                letters += y + "<br>";
            };
            document.getElementById("demo1").innerHTML = "The output is : " + "<br>" + letters;
            document.getElementById("demo1").style.color = "red";
        </script>

        <!-- Javascript home made Iterators using next() -->
        <h4>Home Made Iterable using next()</h4>
        <p>The iterator protocol defines how to produce a sequence of values from an object.</p>
        <p>An object becomes an iterator when it implements a next() method.</p>
        <p>The next() method must return an object with two properties:</p>
        <p>value (the next value)</p>
        <p>done (true or false)</p>

        <p id="demo2"></p>
        <script>
            function myNumbers() {
                let n = 0;
                return {
                    next: function() {
                        n += 5;
                        return {
                            value: n,
                            done: false
                        };
                    }
                };
            }
            // Create Iterables
            const n = myNumbers();
            n.next();
            n.next();
            n.next();
            n.next();
            document.getElementById("demo2").innerHTML = "The output is : " + "<br>" + n.next().value;
            document.getElementById("demo2").style.color = "red";
        </script>

        <!--Real Javascript supported iterators using Symbol.iterator  -->
        <h4>The problem with a home made iterable:</h4>
        <p>It does not support the JavaScript for..of statement.</p>
        <p>A JavaScript iterable is an object that has a Symbol.iterator.</p>
        <p>The Symbol.iterator is a function that returns a next() function.</p>
        <p> An iterable can be iterated over with the code: for (const x of iterable) { }</p>

        <p id="demo4"></p>

        <script>
            // Create an object
            myData = {};
            // Make it Iterable
            myData[Symbol.iterator] = function() {
                let a = 0;
                done = false;
                return {
                    next() {
                        a += 10;
                        if (a == 100) {
                            done = true
                        }
                        return {
                            value: a,
                            done: done
                        };
                    }
                };
            }
            let textData = ''
            for (const num of myData) {
                textData += num + "<br>"
            }
            document.getElementById("demo4").innerHTML = "The output is : " + "<br>" + textData;
            document.getElementById("demo4").style.color = "red";
        </script>

        <!-- Another way of iteration using While() instead of For() -->
        <h4>The Symbol.iterator method is called automatically by for..of.</h4>
        <p> But we can also do it "manually":</p>
        <p id="demo5"></p>
        <script>
            // Create an object
            myNumbers = {};
            // create an iterator
            myNumbers[Symbol.iterator] = function() {
                let b = 0;
                done = false;
                return {
                    next() {
                        b += 10;
                        if (b == 100) {
                            done = true
                        }
                        return {
                            value: b,
                            done: done
                        }
                    }
                };
            }
            // Make it iterable
            let iterator = myNumbers[Symbol.iterator]();
            let dataText = '';
            while (true) {
                const result = iterator.next();
                if (result.done)
                    break;
                dataText += result.value + "<br>";
            }
            document.getElementById("demo5").innerHTML = "The output is : " + "<br>" + dataText;
            document.getElementById("demo5").style.color = "green";
        </script>

<?php
    }
}

// Instantiated
new ObjectIterators;
?>
<?php require_once '../partials/bottom.php';
