 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Kolkata');

$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);


$cat=$_POST['cat'];
$des = $_POST['des'];


$sql = "INSERT INTO `college`.`feedback` (`id`, `cat`, `des`, `date`) VALUES (NULL, '".$cat."', '".$des."', '".$date_time."');";


if ($conn->query($sql) === TRUE) {
	echo 'sucess';
}
							


								
  $conn->close();
?> 