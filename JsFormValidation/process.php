<?php 
 

// Input data
if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'verify') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['submit'])) {
				$fname = $_POST['fname'];
				if (!empty($fname)) {
				echo	$lname = valoidateInput($fname);
				}
				$lname = $_POST['lname'];
				if (!empty($lname)) {
				echo	$lname = valoidateInput($lname);
				}
				
            }
        }
    }
}
// header("Location: Validation.php?$fname");
// Input data Validator function
function valoidateInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>



