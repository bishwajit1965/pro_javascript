<?php require_once '../partials/top.php';echo "<h4>"."File path : ". __FILE__ ."</h4>"."<hr>";?>
    <!-- Code below -->
    <?php
    /**
     * Class declared
     */
    class DocumentObjectModel
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            echo "<h1>I am DocumentObjectModel template</h1>"; ?>
            <div class="box">Bngaldesh</div>
            <div class="box">Pakistan</div>
            <p>This is a paragraph</p>
            <div>
                <p class="box">This is a another second paragraph</p>
                <p class="box">This is a another third paragraph</p>
            </div>

            <script>
                // let name = document.getElementsByClassName("box");
                let name = document.getElementsByTagName("p");
                name[2].innerHTML = 'India, the name has been introduced in it';  
            </script>

<!-- @@@@@@@@@@@@@@ Query selector Changing inner data @@@@@@@@@@@@@@ -->

            <h1>Query selector</h1>
            <p id="demoPara">Paragraph one is here</p>
            <p id="erros"></p>
            <button onclick="myFunctionOne()">Change data and color</button>
            <button type="submit" onclick="window.location.reload()">Refresh</button>
            <br><br>
            <script>
                function myFunctionOne() {
                    try {
                        let xy = "Hello I am the newly replaced data!";
                        document.querySelector("#demoPara").innerHTML = xy;
                        document.getElementById("demoPara").style.color = "green";
                        document.getElementById("demoPara").style.fontSize = "large";  
                    } catch(e) {
                        // statements
                        document.getElementById("error").innerHTML = e.message;
                    }       
                } 
            </script>


            <!-- Query selector Changing background color-->
            <div>
                <p id="demoParaTwo">A Paragraph is here.</p>
                
            </div>
            <p id="errorOne"></p>
            <button onclick="myFunctionTwo()">Change background</button>
            <button type="submit" onclick="window.location.reload()">Refresh</button>
            <br><br>

            <script>
                function myFunctionTwo() {
                    try {
                        let xy = "Hello Bangladesh! How are you? I love you very much. My background has been changed. So, I am feeling very excited!";
                        document.querySelector("div > p#demoParaTwo").innerHTML = xy;
                        document.getElementById("demoParaTwo").style.backgroundColor  = "black";
                        document.getElementById("demoParaTwo").style.fontSize = "large";
                        document.getElementById("demoParaTwo").style.border = "10px solid pink";
                        document.getElementById("demoParaTwo").style.color = "white";
                        document.getElementById("demoParaTwo").style.padding = "10px"; 
                    } catch(e) {
                        // statements
                        document.getElementById("error").innerHTML = e.message;
                    }       
                } 
            </script>

<!-- / @@@@@@@@@@@@@@ Query selector Changing inner data @@@@@@@@@@@@@@ -->

            <ul id="myBox" class="hello">
                <li>Arpita</li>
                <li id="innerBox">Supti</li>
                <li>Pew</li>
            </ul>
            <!-- parentElement -->
            <!-- children -->
            <!-- firstElementChild -->
            <!-- lastElementChild -->
            <!-- nextElementSibling -->
            <!-- previousElementChild -->
            <!-- getAttribute() -->
            <!-- hasAttribute() -->
            <script>
                let myData = document.getElementById("myBox");
                // let myData = document.getElementById("myBox").getAttribute('class');
                // let myData = document.getElementById("myBox").hasAttribute('class');
                // console.log(myData.children);
                // console.log(myData.lastElementChild);
                // console.log(myData.previousElementSibling);
                // console.log(myData.nextElementSibling);
                // console.log(myData);
            </script>

            <!-- ADD ELEMENT -->

                <!-- createElement() -->
                <!-- createTextNode() -->
                <!-- appendChild() -->
                
            <ul id="boxData">
                <li>Sagar</li>
                <li>Arpita</li>
                <li>Pew</li>
            </ul>

            <script>
                let ulBox = document.getElementById("boxData");
                let newLi = document.createElement('li');
                console.log(newLi);
                let liText = document.createTextNode('All children');
                newLi.appendChild(liText); 
                ulBox.appendChild(newLi);
            </script>


            <!-- Child node ane node values -->
            <h1>Child node and node values</h1>
            <button onclick="valueNode()">Node Value changing</button>
            <p id="p1">This the first node paragraph</p>
            <p id="p2">This the second node paragraph</p>

            <script>
                function valueNode(){
                    document.getElementById("p1").innerHTML = document.getElementById("p2").nodeValue;
                    document.getElementById("p2").style.color="red";  
                    document.getElementById("p2").style.fontSize="large";  
                } 
            </script>



            <!-- Add Element from input box -->
            <h1>Add data from input field</h1>
            <ul id="myBoxData">
                <li>Sagar</li>
                <li>Arpita</li>
                <li>Pew</li>
            </ul>
            <input type="text" id="inputData">
            <button type="button" onclick="addMore()">Add more</button>
            <script>
                function addMore(){
                    let insertedData = document.getElementById("myBoxData");
                    let newLis = document.createElement('li');
                    let nameData = document.getElementById("inputData").value;
                    let liTexts = document.createTextNode(nameData);
                    newLis.appendChild(liTexts);
                    insertedData.appendChild(newLis);
                    document.getElementById("inputData").value="";
                }
            </script>
            

            <!-- Add Event listeners -->
            <h1>Adding event listeners</h1>
            <button id="myBtn">Click Me</button>
            <p id="listen"></p>
            <script>
                document.getElementById("myBtn").addEventListener("click", displayData);
                function displayData(){
                    let x = "Hello I am an event listener paragraph";
                    document.getElementById("listen").innerHTML = x;
                }  
            </script>

            <!-- Another example of add event listner -->
            <button id="yourBtn">Please click</button>
            <script>
                document.getElementById("yourBtn").addEventListener("click", function(){
                    alert("Hello I am an event listener text");
                })
            </script>

            <!-- Adding diffrent event listerners simultaneously -->
            <button id="manyEvent">Many Event listeners</button>
            <p id="listener1"><span>1.</span>I am the first paragraph.</p>
            <p id="listener2"><span>2.</span>I am the second paragraph.</p>
            <p id="listener3"><span>3.</span>I am the third paragraph.</p>
            <script>
                let x = document.getElementById("manyEvent");

                x.addEventListener("click", myFunction);
                x.addEventListener("click", herFunction);
                x.addEventListener("click", ourFunction);

                function myFunction(){
                    let a = "1. Hello Bangladesh I lovre you a lot";
                    // alert("Hello one");
                    document.getElementById("listener1").innerHTML = a;
                }

                function herFunction(){
                    let b = "2. How are you at yhe present moment?";
                    // alert("Hello two");
                    document.getElementById("listener2").innerHTML = b;
                }

                function ourFunction(){
                    let c = "3. Be patient, I will set everything right";
                    // alert("Hello three");
                    document.getElementById("listener3").innerHTML = c ;
                }
            </script>

            

            <!-- Another add event listner example -->
            <button id="manyEvents">Many Event listeners</button>
            <p id="listenerOne"><span>1.</span>I am listner one paragraph.</p>
            <p id="listenerTwo"><span>2.</span>I am listner two paragraph.</p>
            <p id="listenerTYhree"><span>3.</span>I am listner three paragraph.</p>

            <script>
                let y = document.getElementById("manyEvents");

                y.addEventListener("mouseover", myFunction);
                y.addEventListener("click", herFunction);
                y.addEventListener("mouseout", ourFunction);
            </script>
            

            <!-- Another add event listner example of adding parameter -->
            <button id="multiplyNum">Multiply/Add/Subtract</button>
            <p id="result"></p>

            <script>
                let m = 10;
                let n = 20;

                let z = document.getElementById("multiplyNum");

                z.addEventListener("click", function(){
                    multiply(m , n);
                });
                z.addEventListener("mouseover", function(){
                    add(m , n);
                });

                z.addEventListener("mouseout", function(){
                    subtract(m , n);
                });

                function multiply(a, b) {
                    document.getElementById("result").innerHTML ="The result of multiplication : " + ""+ a * b;
                     
                };
                function add(a, b) {
                    
                    document.getElementById("result").innerHTML ="The result of addition : " + (a + b);
                };
                function subtract(a, b) {
                    
                    document.getElementById("result").innerHTML ="The result of subtraction : " + (a - b);
                };
                
            </script>

            
            <!-- Insert HTML element Before & After  -->
            <h1>Insert HTML element Before</h1>
            <div id="div1">
                <p id="p3">Hello ! I am paragraph here.</p>
            </div>
            <p id="AddError"></p>
            <button onclick="AddElementBefore()">Add before</button>
            
            <script>
                function AddElementBefore() {
                    try {
                        const newPara = document.createElement("p");
                        const textNode = document.createTextNode("Hello I am a new paragraph added.");
                        newPara.appendChild(textNode);

                        const element = document.getElementById("div1");
                        const child = document.getElementById("p3");

                        const addedPara = element.insertBefore(newPara, child);
                        addedPara.style.fontSize = 'large';
                        addedPara.style.color = 'green';    
                       
                    } catch(e) {
                        // statements
                        document.getElementById("AddError").innerHTML = "<b>Error !</b>" + " " + e.message;
                        document.getElementById("AddError").style.color = "red";
                        // console.log(e);
                    }
                }
            </script>
            
            

            <!-- Removing Child Node -->
            <h1>Removing Child Node</h1>
            <div id="divOne">
                <p id="paraOne">Hello I am paragraph one.</p>
                <p id="delMessage"></p>
            </div>
            <button onclick="removeData()">Remove child</button>
            <p id="ErrorOccurred"></p>
            <script>
                function removeData(){
                    try {
                        const parentData = document.getElementById("divOne");

                        const para = document.getElementById("paraOne");
                        const message = parentData.removeChild(para);
                        const deleteMessage = "Data has been removed";
                        if (message) {
                            const msg = document.getElementById("delMessage").innerHTML = deleteMessage;
                            document.getElementById('delMessage').style.color = 'red';
                            document.getElementById('delMessage').style.fontSize = 'large';
                        }
                    } catch(e) {
                        // statements
                        document.getElementById("ErrorOccurred").innerHTML = e.message;
                        // console.log(e);
                    }
                }
            </script>
        <?php
        }
    }
    // Instantiated
    new DocumentObjectModel();
    ?>
<?php require_once '../partials/bottom.php';?>