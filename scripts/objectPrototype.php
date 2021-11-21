<?php require_once '../partials/top.php'; ?>
    <!-- Code below -->
    <?php

    class ObjectPrototype
    {
        public function __construct()
        {
            ?>
            <h3 class='heading'>JavaScript Object Prototypes:</h3>
            <h4><strong>Outputs : </strong></h4>
            <p id="demo" class="data-diplay"></p>
            <p id="demo1" class="data-diplay"></p>
            <script>
                try{
                    // Constructor function
                    function Person (firstName, lastName, age, nationality) {
                        this.firstName = firstName;
                        this.lastName = lastName;
                        this.age = age;
                        this.nationality = nationality;
                    }
                    var myFather = new Person('Narayan', 'Chandra', 80, 'Bangladeshi');

                    var myMother = new Person('Karuna', 'Bala', 75, 'Bangladeshi');

                    document.getElementById('demo').innerHTML = 'My father late '+ ' '+  myFather.firstName + ' '  + myFather.lastName + ' ' + '  is ' + ' ' + myFather.age + ' ' + 'years old and he is a ' + ' ' + myFather.nationality + ' ' + 'by birth.';

                    document.getElementById('demo1').innerHTML = 'My mother '+ ' '+  myMother.firstName + ' '  + myMother.lastName + ' ' + '  is ' + ' ' + myMother.age + ' ' + 'years old and she is a ' + ' ' + myMother.nationality + ' ' + 'by birth.';

                } catch (error) {
                    document.getElementById('demo2').innerHTML = error.message;
                }
            </script>

            <!-- ***************************************************************** -->

            <h3 class='heading'>JavaScript Object Prototypes to add new property:</h3>
            <p>Wihout adding <strong>prototype</strong> key word no property can be added to the constructor method</p>
            <h4><strong>Output : </strong></h4>
            <p id="demo2" class="data-diplay"></p>
            <script>
                try {
                    // Constructor function
                    function Person (firstName, lastName, age, nationality) {
                        this.firstName = firstName;
                        this.lastName = lastName;
                        this.age = age;
                        this.nationality = nationality;
                    }
                    // Prototype used to add new property to the constructor
                    Person.prototype.eyeColor = 'black';
                    var myFather = new Person('Narayan', 'Chandra', 80, 'Bangladeshi', 'black');
                    document.getElementById('demo2').innerHTML = 'My father late '+ ' '+  myFather.firstName + ' '  + myFather.lastName + ' ' + '  is ' + ' ' + myFather.age + ' ' + 'years old and he is a ' + ' ' + myFather.nationality + ' ' + 'by birth.' + ' and his eyes are ' + myFather.eyeColor ;
                } catch (error) {
                    document.getElementById('demo2').innerHTML = error.message;
                }
            </script>
            <?php
        }
    }
    new ObjectPrototype;
    ?>
    <!-- Code above -->
<?php require_once '../partials/bottom.php'; ?>
