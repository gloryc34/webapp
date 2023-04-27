<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calculator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST["Email"];
$pword = $_POST["password"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$phonenumber = $_POST["phonenumber"];


$sql = "INSERT INTO account (email, password, first_name, last_name, phone_number) VALUES ('$email', '$pword', '$fname', '$lname', '$phonenumber')";





if ($conn->query($sql) === TRUE) {
    echo "Sign up successfully!";
    header("location: account.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();


?>

</body>
</html>