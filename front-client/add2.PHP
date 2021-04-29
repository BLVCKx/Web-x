<?PHP

include "./php/Client1.php";

include "./config1.php";
error_reporting(0);

session_start();
if (isset($_POST['ajouter'])) {
	$name = $_POST['name1'];
$description = $_POST['description1'];

	$sql = "SELECT * FROM profession WHERE name='$name'";
	$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
		$sql = "INSERT INTO profession (name,description,nb_agents)
				VALUES ('$name','$description',0)";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script>alert('Wow! profession Registration Completed.')</script>"; 
			header('Location: my-account.php');
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
		echo "<script>alert('Woops! profession Already Exists.')</script>";
	}
	

}

?>