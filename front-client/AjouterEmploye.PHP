<?PHP

include "./php/Client1.php";

include "./config1.php";
error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
    $cin = $_POST['cin'];
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$name= $_POST['categorie'];

	if ($password == $password1) {
		$sql = "SELECT * FROM client WHERE  email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO client (cin,first_name,last_name, email, phone, password,name)
					VALUES ('$cin','$first_name', '$last_name','$email','$phone', '$password','$name')";
					$ssql = "UPDATE profession set nb_agents=nb_agents +1 where name='$name'";
			$result = mysqli_query($conn, $sql);
			$result = mysqli_query($conn, $ssql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>"; 
				header('Location: login.php');
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['password1'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
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
			header('Location: register.php');
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
	} else {
		echo "<script>alert('Woops! profession Already Exists.')</script>";
	}
	

}

?>