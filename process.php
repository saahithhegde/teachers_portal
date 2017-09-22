<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username1=$_POST['uname'];
$password1=$_POST['psw'];

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if( $row["username"]== $username1 && $row["password"]== $password1)
			{
			header('Location: home.php');
			break;
		    }
			else
			{
				header('Location: index.php');
				
			}
			
		
 }
} 
else {
    echo "0 results";
}

$conn->close();

?>