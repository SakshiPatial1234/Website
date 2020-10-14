<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php/* Attempt MySQL server connection. Assuming you are running MySQLserver with default setting (user 'root' with no password) */$link = mysqli_connect("localhost", "root", "", "project"); // Check connectionif($link === false){    die("ERROR: Could not connect. " . mysqli_connect_error());} // Escape user inputs for security$Select_Your_PIZZA = mysqli_real_escape_string($link, $_REQUEST['Select_Your_PIZZA']);$Number_of_pizza = mysqli_real_escape_string($link, $_REQUEST['Number_of_pizza']);$phone_number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);$address = mysqli_real_escape_string($link, $_REQUEST['address']);if(isset($_POST['submit'])){$selected_val = $_POST['Color'];  // Storing Selected Value In Variableecho "You have selected :" .$selected_val;  // Displaying Selected Value}// Attempt insert query execution$sql = "INSERT INTO pizza ( Select_Your_PIZZA,Number_of_pizza, phone_number,address) VALUES ('$Select_Your_PIZZA','$Number_of_pizza','$phone_number','$address')";if(mysqli_query($link, $sql)){	echo "Connected to database.";	echo"<br>";    echo "\nOrder placed.";} else{    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);} // Close connectionmysqli_close($link);?>
</body>
</html>
