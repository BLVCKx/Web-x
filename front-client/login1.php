<?php 

$host="localhost";
$user="root";
$password="";
$db="client";

$conn = mysqli_connect($host, $user, $password, $db);
error_reporting(0);

session_start();
if(isset($_POST['log1'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from client where email='".$email."AND password='".$password."' limit 1";
    
    $result = mysqli_query($conn, $sql);
    
    if(!$result->num_rows > 0){
        echo " You Have Successfully Logged in";
        $_SESSION['e']=$email;
		$_SESSION['p']=$password;  
		header('Location: my-account.php');
        exit();
    }

    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}

	

	
	

?>