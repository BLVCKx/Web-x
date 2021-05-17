<?php
$conn = mysqli_connect("localhost", "root", "", "my_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM users
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive-lg">
	
					<table class="table table-striped table-dark">
						<tr>
							<th>id</th>
							
							<th>name</th>
							
							<th>email</th>
							<th></th>
							<th></th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td class="bg-warning">'.$row["id"].'</td>
				<td class="bg-info">'.$row["name"].'</td>
				<td class="bg-success">'.$row["email"].'</td>
				<td class="bg-success"></td>
				<td class="bg-success"></td>
				
				
				
				

				
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>