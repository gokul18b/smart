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

  $id=$_GET['id'];
 
 $sql="select * from user left join class as c on(c.id=user.cid) where user.id=".$id;
$res = $conn->query($sql);

if ($result=mysqli_query($conn,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  mysqli_free_result($result);
	if($rowcount==0){
		echo '{"data":{"status":2,"msg":"Invalid id"}}';
	}
	else{
		while($row = $res->fetch_assoc()) {
			$data['name']= $row['name'];
			$data['email']= $row['email'];
			$data['mobile']= $row['mobile'];
			$data['classname']= $row['class_name'];
			$data['dob']= $row['dob'];
			$data['age']= $row['age'];

    }
	echo json_encode($data);
		 
	}
 }
$conn->close();
?> 