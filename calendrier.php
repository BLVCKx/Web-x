<?php
function build_calendar($month,$year,$veto){

	$mysqli=new mysqli('localhost','root','','gestion_veterinaire');
	
	$stmt=$mysqli->prepare('select * from veterinaire');
	$vetos="";
	$first_vet=0;
	$i=0;
	if($stmt->execute()){
		$result =$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				if($i==0){
					$first_vet=$row['id'];
				}
				$vetos.="<option value=".$row['id'].">".$row['nom']."</option>";
				$i++;
			}
			$stmt->close();
		}
	}

	if($veto==0){
		$first_vet=$veto;

	}

	$stmt=$mysqli->prepare('select * from intervention where MONTH(date)=? AND YEAR(date)=? AND veterinaire=?');
	$stmt->bind_param('ssi',$month,$year,$first_vet);
	$bookings=array();
	if($stmt->execute()){
		$result =$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$bookings[]=$row['date'];
			}
			$stmt->close();
		}
	}

	/*
	$stmt=$mysqli->prepare('select * from bookings where MONTH(date)=? AND YEAR(date)=?');
	$stmt->bind_param('ss',$month,$year);
	$bookings=array();
	if($stmt->execute()){
		$result =$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$bookings[]=$row['date'];
			}
			$stmt->close();
		}
	}
	*/


	//setlocale(LC_TIME,'fra_fra');
	//$monthNameFR=ucfirst(strftime('%B'));
	

	$daysOfWeek= array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
	$firstDayOfMonth=mktime(0,0,0,$month,1,$year);
	$numberDays=date('t',$firstDayOfMonth);
	$dateComponents= getdate($firstDayOfMonth);
	$monthName=$dateComponents['month'];
	$dayOfWeek = $dateComponents['wday'];
	$dateToday= date('Y-m-d');
	if($dayOfWeek==0){
		$dayOfWeek=6;
	}
	else{
		$dayOfWeek-=1;
	}


	$prev_month=date('m',mktime(0,0,0,$month-1,1,$year));
	$prev_year=date('Y',mktime(0,0,0,$month-1,1,$year));
	$next_month=date('m',mktime(0,0,0,$month+1,1,$year));
	$next_year=date('Y',mktime(0,0,0,$month+1,1,$year));
	$calendar="<center><h2>$monthName $year</h2>";
	$calendar.="<a class='btn btn-primary btn-xs' href='?month=".$prev_month."&year=".$prev_year."' >Mois Précédent</a> ";

	$calendar.="<a class='btn btn-primary btn-xs' href='?month=".date('m')."&year=".date("Y")."'>Mois Courant</a> ";

	$calendar.="<a class='btn btn-primary btn-xs' href='?month=".$next_month."&year=".$next_year."'>Mois Suivant</a></center>";

	$calendar.="
	<form id='veto_select_form'>
	<div class='row'>
		<div class='col-md-6 col-md-offset-3 form-group'>
			<label>Selectionnez Votre Véterinaire</label>
			<select class='form-control' id='veto_select' name='veto'>
				".$vetos."
			</select>
			<input type='hidden' name='month' value='".$month."'>
			<input type='hidden' name='year' value='".$year."'>
		</div>
	</div>
	</form>



	<table class='table table-bordered'>";
	$calendar.="<tr>";

	foreach($daysOfWeek as $day){
		$calendar.="<th class='header'>$day</th>";
	}

	$calendar.="</tr><tr>";
	$currentDay=1;
	if($dayOfWeek>0){
		for($k=0;$k<$dayOfWeek;$k++)
		{
			$calendar.="<td class='empty'></td>";
		}
	}
	$month=str_pad($month,2,"0",STR_PAD_LEFT);
	while($currentDay<=$numberDays){
		if($dayOfWeek == 7){
			$dayOfWeek=0;
			$calendar.="</tr><tr>";
		}
		$currentDayRel=str_pad($currentDay,2,"0",STR_PAD_LEFT);
		$date="$year-$month-$currentDayRel";
		$dayName= strtolower(date('l',strtotime($date)));
		$today=$date==date("Y-m-d")?'today':'';
		
		if($dayName=='saturday'||$dayName=='sunday')
		{
			$calendar.="<td class='$today'><h4>$currentDay</h4><a class ='btn btn-danger btn-xs'>Repos</a></td>";
		}elseif($date<date('Y-m-d')){
			$calendar.="<td class='$today'><h4>$currentDay</h4><a class ='btn btn-danger btn-xs'>Dépassé</a></td>";
		}		
		else{

			$totalbookings=checkSlots($mysqli,$date,$veto);
			if($totalbookings==2){
				$calendar.="<td class='$today'><h4>$currentDay</h4><a href='#' class ='btn btn-danger btn-xs'>Complet</a></td>";
			}
			else{
				$availableslots=2-$totalbookings;
				if($availableslots==1)
				{
					$calendar.="<td class='$today'><h4>$currentDay</h4><a href='book.php?date=".$date."' class ='btn btn-success btn-xs'>Réserver</a><small><i>$availableslots séance disponible</i></small></td>";
				}
				else{
				$calendar.="<td class='$today'><h4>$currentDay</h4><a href='book.php?date=".$date."' class ='btn btn-success btn-xs'>Réserver</a><small><i>$availableslots séances disponibles</i></small></td>";
				}
			}
		}		

		$currentDay++;
		$dayOfWeek++;
	}

	if($dayOfWeek<7)
	{
		$remainingDays=7-$dayOfWeek;
		for($i=0;$i<$remainingDays;$i++)
		{
			$calendar.="<td class='empty'></td>";
		}
	}
	$calendar.="</tr></table>";


	return $calendar;
	
}

function checkSlots($mysqli,$date,$veto){
	
	$stmt=$mysqli->prepare('select * from veterinaire');
	$vetos="";
	$first_vet=0;
	$i=0;
	if($stmt->execute()){
		$result =$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				if($i==0){
					$first_vet=$row['id'];
				}
				$i++;
			}
			$stmt->close();
		}
	}
	if($veto!=0){
		$first_vet=$veto;
	}

	$stmt=$mysqli->prepare('select * from intervention where date=? AND veterinaire=?');
	$stmt->bind_param('si',$date,$first_vet);
	$totalbookings=0;
	if($stmt->execute()){
		$result =$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$totalbookings++;
			}
			$stmt->close();
		}
	}


	return $totalbookings;
}

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scame=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
		@media only screen and (max-width:760px),
		(min-device-width: 802px)and(max-device-width:1020px)
	{
		{
			table,
			thead,
			tbody,
			th,
			td,
			tr{
				display:block;			
			}
		}

		.empty{
			display:none;
		}

		th{
			position: absolute;
			top:-9999px;
			left:-9999px;
		}

		tr{
			border: 1px solid #ccc;
		}

		td{
			border:none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left:50%;
		}

		td:nth-of-type(1):before{
			content:"Sunday";
		}

		td:nth-of-type(2):before{
			content:"Monday";
		}

		td:nth-of-type(3):before{
			content:"Tuesday";
		}

		td:nth-of-type(4):before{
			content:"Wednesday";
		}

		td:nth-of-type(5):before{
			content:"Thursday";
		}

		td:nth-of-type(6):before{
			content:"Friday";
		}

		td:nth-of-type(7):before{
			content:"Saturday";
		}
	}

	.row{
		margin-top:20px;
	}

	.today{
		background:yellow;
	}
</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="cold-md-12">
				<?php
				session_start();
					$dateComponents=getdate();
					if(isset($_GET['month'])&& isset($_GET['year'])){
						$month= $_GET['month'];
						$year = $_GET['year'];
					}
					else{
						$month=$dateComponents['mon'];
						$year=$dateComponents['year'];
					}

					if(isset($_GET['veto'])){
						$veto=$_GET['veto'];
					}else{
						$veto=0;
					}
					
					echo build_calendar($month,$year,$veto);
				?>
			</div>
		</div>
	</div>
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">			 	
			  </script>
			  <script>
			  	$("#veto_select").change(function(){
			  		$("#veto_select_form").submit();

			  	});

			  	$("#veto_select option[value='<?php echo $veto;$_SESSION['vet_id']=$veto;?>']").attr('selected','selected');

			  </script>

</body>
</html>

</body>
