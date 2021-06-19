 function validateForm() {
	var x,y;
	var x = document.forms["myForm"]["fname"].value;
	var y = document.forms["myForm"]["lname"].value;
	// Validation of fname
	if (x == "") {
	document.getElementById("demo").innerHTML = "First name field has been left blank";
	// return false;
	} else if (x.length < 6) {
		document.getElementById("demo").innerHTML = "At least 6 characters needed";
		// return false;
	}
	else {
		document.getElementById("demo1").innerHTML = "<span>WOW ! </span>" + ' ' + x;
		// return false;
		// "eturn false" will halt there
	}
	// Validation of lname
	if(y == ""){
		document.getElementById("demo2").innerHTML = "Last name field has been left blank";
		return false;
	} else if (y.length < 6) {
		document.getElementById("demo2").innerHTML = "At least 6 characters needed";
		return false;
	} else {
		document.getElementById("demo22").innerHTML = "<span>WOW ! </span>" + ' ' +  y;
		return false;
	}
}
 