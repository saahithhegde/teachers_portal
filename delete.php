<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "attendence";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$usn1=$_POST['uname'];
$sql ="DELETE * FROM `sem3` WHERE usn='$usn1'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: sem3.php');
	
} else {
	header('Location: sem3.php');
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

