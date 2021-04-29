<?php

if(isset($_POST['up-btn'])){
   include "./config1.php";
   $cin1=$row['cin'];
   $first_name1=$row['first_name'];
   $last_name1=$row['last_name'];
   $email1=$row['email'];
   $phone1=$row['phone'];

	$sql = "UPDATE client
        SET cin='$cin1',first_name='$first_name1',last_name='$last_name1', email='$email1' ,phone='$phone1'
        WHERE cin=$cin1 ";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      echo "succes";
   	  header("Location: ./dashboard.php#account-info");
   }else {
      echo " You Have Entered Incorrect info";
      header("Location: ./dashboard.php");
   }
}
?>