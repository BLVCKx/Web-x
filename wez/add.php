<?php

include('db.php');

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$description = $_POST['description'];
	$prix = $_POST['prix'];
	$quantité = $_POST['quantité'];

	//image upload

	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	  
	  if (empty($name)) {
		echo "<script>alert('Woops! name is empty.')</script>";
	}else if (empty($date)) {
		echo "<script>alert('Woops! date is empty .')</script>";
	}else if (empty($description)) {
		echo "<script>alert('Woops! description is empty.')</script>";
	}else if (empty($prix)) {
		echo "<script>alert('Woops! prix is empty.')</script>";
	}else if (empty($quantité)) {
		echo "<script>alert('Woops! quantité is empty.')</script>";	

	  }else { 

  	$insert_data = "INSERT INTO produits (id,name,date,description,prix,quantité,image) VALUES ('$id','$name','$date','$description','$prix','$quantité','$image')";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}
	  }
}

?>