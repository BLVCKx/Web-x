<?php  
session_start();
include 'config1.php';
if(isset($_GET['delete'])){
   $id=$_GET['delete'];

   $sql = "DELETE FROM profession
	        WHERE id_prof=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      header('location:basic-table.php');
   $_SESSION['response']="Successfully Deleted!";
   $_SESSION['res_type']="danger";
   }else {
      echo " You Have Entered Incorrect Password";
      
   }
}
/*if(isset($_GET['edit'])){
   $id=$_GET['edit'];

   $query="SELECT * FROM client WHERE id=?";
   $stmt=$conn->prepare($query);
   $stmt->bind_param("i",$id);
   $stmt->execute();
   $result=$stmt->get_result();
   $row=$result->fetch_assoc();

   $cin=$row['cin'];
   $first_name=$row['first_name'];
   $last_name=$row['last_name'];
   $email=$row['email'];
   $phone=$row['phone'];
   $_SESSION['e']=$row['email'];
   $_SESSION['ed']=$_GET['edit'];
   $_SESSION['i']=$id;

   $update=true;
   header('location:profile.php');
}
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
   	  header("Location: ./dashboard.php");
   }else {
      echo " You Have Entered Incorrect info";
      header("Location: ./dashboard.php");
   }
}
?>*/