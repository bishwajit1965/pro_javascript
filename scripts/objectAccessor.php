<?php require_once '../partials/top.php';?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class ObjectAccessor
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am ObjectAccessor template</h1>";
            ?>
            <p id="name"></p>
            <p id="herName"></p>
            <p id="herName2"></p>
            <p id="herName3"></p>
            <script>
                const person = {
                    firstName: "Arpita",
                    lastName: "Paul",

                    get fullName() {
                        return this.firstName + " " + this.lastName;
                    }
                };
                document.getElementById("name").innerHTML = person.fullName;
                
            </script>

            <script>
                const Country = {
                    herName : "",
                    set CountryName(CountryName){
                        this.herName = CountryName.toUpperCase();
                    }
                };
                
                Country.CountryName = "Bangladesh";
                document.getElementById("herName").innerHTML = Country.herName;
                
            </script>
            <script>
                try {
                    const Object = {
                    firstName: "",
                    lastName: "",

                    get getFullName() {
                        return this.firstName + " " + this.lastName;
                    },

                    set setFullName(value){
                        this.firstName = value.fn;
                        this.lastName = value.ln;
                    }
                };
                
                Object.setFullName = {
                    fn: "Pew",
                    ln: "Paul",
                };

                document.getElementById("herName2").innerHTML = Object.getFullName();

                } catch(e) {
                    // statements
                    console.log(e);
                }
                
                
            </script>
            <?php
        }
    }

    // Instantiated
    new ObjectAccessor;
    ?>
<?php require_once '../partials/bottom.php';?>



    