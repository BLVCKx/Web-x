<?php
$con = mysqli_connect("localhost", "root", "", "produits");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM produits 
	WHERE Name LIKE '%".$search."%'
	OR date LIKE '%".$search."%' 
	OR description LIKE '%".$search."%' 
	OR prix LIKE '%".$search."%' 
	OR quantité LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM produits ORDER BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						    <th> id</th>
							<th> Name</th>
							<th>date</th>
							<th>description</th>
							<th>prix</th>
							<th>quantité</th>
						

						</tr>';

						

	while($row = mysqli_fetch_array($result))
	{ $image = $row['image'];
		
		$output .= '
			<tr>
			    <td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["date"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["prix"].'</td>
				<td>'.$row["quantité"].'</td>
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