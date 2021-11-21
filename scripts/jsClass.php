<?php require_once '../partials/top.php'; ?>
<!-- Code below -->
<?php
echo "File path: " . __FILE__ . "<hr>";

/**
 * Class declared
 */
class JsClass
{
    /**
     * Constructor
     */
    public function __construct()
    {
        echo "<h1>I am Javascript class template</h1>"; ?>
        <h4>Javascript class</h4>
        <p id="demo"></p>

        <script>
            class Car {
                constructor(name, year) {
                    this.name = name;
                    this.year = year;
                }
                age() {
                    let date = new Date();
                    return date.getFullYear() - this.year;
                }
            }
            myCar = new Car("Toyota", 2014);
            document.getElementById("demo").innerHTML = "My car " + " " + myCar.name + " is " + myCar.age() + " " + "years old";
            document.getElementById("demo").style.color = "red";
        </script>

        <!-- ******************* JS CLASS INHERITANCE******************** -->
        <h4>Class Inheritance</h4>
        <p id="demo2"></p>
        <p id="demo1"></p>
        <script>
            class Model {
                constructor(brand) {
                    this.carName = brand;
                }
                present() {
                    return "My car name is" + " " + this.carName;

                }
            }

            class myVehicle extends Model {
                constructor(brand, mod) {
                    // super(brand) will call the parent constructor
                    super(brand);
                    this.model = mod;
                }
                show() {
                    return this.present() + " and the model is " + " " + this.model;
                }
            }
            let data = new myVehicle('Ford', 'Excellent');
            document.getElementById("demo2").innerHTML = "Output is : ";
            document.getElementById("demo1").innerHTML = data.show();
            document.getElementById("demo1").style.color = "red";
        </script>

        <!--****************** JS getter() and setter() method **********************-->

        <h4>Javascript getters and setters method</h4>
        <p id="demo3"></p>

        <script>
            class myCarName {
                constructor(name, price) {
                    this.carName = name;
                    this.carPrice = price;
                }
                get cName() {
                    return this.carName;
                }
                get cPrice() {
                    return this.carName + this.carPrice;
                }

                set cName(x) {
                    this.carName = x;
                }
                set cPrice(y) {
                    this.carPrice = y;
                }
            }
            let c = new myCarName("Mercedes Benz", 100000);
            document.getElementById("demo3").innerHTML = "My car name is :" + " " + c.cName + " and the price is :" + " " + c.carPrice + "$";
        </script>



<?php
    }
}

// Instantiated
new JsClass;
?>
<?php require_once '../partials/bottom.php'; ?>