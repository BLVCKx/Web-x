<?php  
error_reporting(0);

session_start();
if(isset($_POST['supp-btn'])){
   include "./config1.php";
	$cin = $_POST['cin1'];
   $namea=$_POST['namee'];
	$sql = "DELETE FROM client
	        WHERE cin=$cin";
   $result = mysqli_query($conn, $sql);
   $ssql = "UPDATE profession set nb_agents=nb_agents -1 where name='$namea'";
   $resultt = mysqli_query($conn, $ssql);
   if ($result) {
      echo " succes";
      $ssql = "UPDATE profession set nb_agents=nb_agents -1 where name='$name'";
   	  header("Location: ./login.php?success=successfully deleted");
   }else {
      echo " You Have Entered Incorrect Password";
      header("Location: ./my-account.php");
   }


}

if(isset($_POST['mod-btn'])){
   include "./config1.php";
   $cin1 = $_POST['cin1'];
   $first_name1 = $_POST['first-name1'];
   $last_name1 = $_POST['last-name1'];
   $email1 = $_POST['email1'];
   $phone1 = $_POST['phone1'];
   $namea=$_POST['namee'];
	$sql = "UPDATE client
        SET cin='$cin1',first_name='$first_name1',last_name='$last_name1', email='$email1' ,phone='$phone1',name='$namea'
        WHERE cin=$cin1 ";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      echo "succes";
   	  header("Location: ./my-account.php");
   }else {
      echo " You Have Entered Incorrect info";
      header("Location: ./my-account.php");
   }
}
if(isset($_POST['chang-btn'])){
   include "./config1.php";
	$name= $_POST['categorie1'];
   $namea=$_POST['namee'];
   $cin1 = $_POST['cin1'];

	$sql = "UPDATE client
        SET name='$name'
        WHERE cin=$cin1 ";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      echo "succes";
   	  header("Location: ./my-account.php");
   }else {
      echo " You Have Entered Incorrect info";
      header("Location: ./my-account.php");
   }
}

   ?>
