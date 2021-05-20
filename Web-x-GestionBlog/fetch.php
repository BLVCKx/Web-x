<?php
$connect = mysqli_connect("localhost", "root", "", "my_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM blog_data
	WHERE content LIKE '%".$search."%'
	OR title LIKE '%".$search."%' 
	
	
	";
}
else
{
	$query = "
	SELECT * FROM blog_data ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>id</th>
							<th>title</th>
							<th>content</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["title"].'</td>
				<td>'.$row["content"].'</td>
				
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