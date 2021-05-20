<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$date = validate($_POST['date']);
	$prix = validate($_POST['prix']);
	
	
	
	



	$user_data = 'name='.$name. 'date='.$date.  'prix='.$prix ;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($date)) {
		header("Location: ../index.php?error=date is required&$user_data");

	}else if (empty($prix)) {
				header("Location: ../index.php?error=prix is required&$user_data");
		
	
	
	}else {

       $sql = "INSERT INTO facture (name, date,  prix) 
               VALUES('$name', '$date',  '$prix')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully sended");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}