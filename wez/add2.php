<?php

include('db_connection.php');

session_start();
if(isset($_POST['submit2'])){
	$now=new DateTime();
	$name = $_SESSION['f'];
	$date =$now->format(format: 'Y-m-d H:i:s');
	$adress = $_POST['adddress'];
	$total = $_SESSION['rer'];
	$phone = $_SESSION['ph'];



	  
	  if (empty($name)) {
		echo "<script>alert('Woops! name is empty.')</script>";
	}else if (empty($date)) {
		echo "<script>alert('Woops! date is empty .')</script>";
	}else if (empty($adress)) {
		echo "<script>alert('Woops! adress is empty.')</script>";
	}else if (empty($total)) {
		echo "<script>alert('Woops! tttt is empty.')</script>";
	}else if (empty($phone)) {
		echo "<script>alert('Woops! ph is empty.')</script>";	

	  }else { 

  	$insert_data = "INSERT INTO factures (name,datee,adress,prix,phone) VALUES ('$name','$date','$adress','$total','$phone')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:shop.php');
  	}else{
  		echo "Data not insert";
  	}
	  }
}

?>