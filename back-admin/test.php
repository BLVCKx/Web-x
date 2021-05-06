<?php

if(isset($_POST['up-btn'])){
   include "./config1.php";
   $cin1=$_POST['cin3'];
   $first_name1=$_POST['first_name3'];
   $last_name1=$_POST['last_name3'];
   $email1=$_POST['email3'];
   $phone1=$_POST['phone3'];
   $name1=$_POST['name3'];
   $role1=$_POST['role3'];

	$sql = "UPDATE client
        SET cin='$cin1',first_name='$first_name1',last_name='$last_name1', email='$email1' ,phone='$phone1',name='$name1',role='$role1'
        WHERE cin=$cin1 ";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      echo "succes";
   	  header("Location: ./dashboard.php");
   }else {
      echo " You Have Entered Incorrect info";
      //header("Location: ./dashboard.php");
   }
}
?>