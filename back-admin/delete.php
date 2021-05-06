<?php  
session_start();
include 'config1.php';
if(isset($_GET['delete'])){
   $id=$_GET['delete'];

   $sql = "DELETE FROM client
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   $ssql = "UPDATE profession set nb_agents=nb_agents -1 where name='$name'";
   $resultt = mysqli_query($conn, $ssql);
   if ($result) {
      header('location:dashboard.php');
   $_SESSION['response']="Successfully Deleted!";
   $_SESSION['res_type']="danger";
   }else {
      echo " You Have Entered Incorrect Password";
      
   }
}
if(isset($_GET['edit'])){
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


?>