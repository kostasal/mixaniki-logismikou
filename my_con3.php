<?php

	header('Content-Type: text/html; charset=utf-8');

   if(isset($_POST['pros4']))
   {
	   
   
		$servername = "localhost";
		$username = "root";
		$password = "kostas";
		$dbname = "form";


	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	
	// Check connection
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}

		$value = $_POST['email1'];
		$value2= $_POST['email2'];
		$value3= $_POST['email3'];
		$value4= $_POST['email4'];
		$value5= $_POST['email5'];
		

	$sql= "INSERT INTO telos (email1,email2,email3,email4,email5) VALUES('$value','$value2','$value3','$value4','$value5')";

	if (mysqli_query($conn, $sql)) {
		
		/*$message = "Η καταχώρηση ολοκληρώθηκε!";
		echo "<script type='text/javascript'>alert('$message');</script>";*/
		
	} else {
		
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	mysqli_close($conn);
	
	$msg5=$_POST["email1"];
	$msg6=$_POST["email2"];
	$msg7=$_POST["email3"];
	$msg8=$_POST["email4"];
	$msg9=$_POST["email5"];
	
	/*echo $msg5;
	echo $msg6;
	echo $msg7;
	echo $msg8;
	echo $msg9;*/
	
	
	//let's start the session
	session_start();
	
	/*echo $_SESSION['title'];
	echo $_SESSION['name'];
	echo $_SESSION['email'];
	echo $_SESSION['location'];
	echo $_SESSION['comment'];*/
	
	
	//send email to thε people you want to participate in the event
	
	include 'send-mail.php';

   }	
?>

<!DOCTYPE Html>

<html>

	<head>
	
	
			<title>Organize Meeting</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/w3.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script src="javascript/jquery.js"></script>
			<script src="javascript/jquery.datetimepicker.full.min.js"></script>
			<link rel="stylesheet" href="css/gf.css">
			<link rel="stylesheet" type="text/css" href="my_con2.css">
			
			
	</head>
			
			<body>
			
					<div id="dem">	
						</br></br></br>
						<div class="w3-middle w3-card-12 w3-white w3-mycard" style="width:1140px;height:460px;">
				
					
							<div class="w3-green w3-mytop w3-bottombar w3-border-grey" style="height:100px;">
					
								<div class="w3-right w3-margin">
					
									<ul class="w3-pagination w3-large w3-panel">
							
										<li><a href="#">&laquo;</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a class="w3-red w3-myborder" href="#">4</a></li>
										
						 
									</ul>
							
								</div>
						
							
										<h1 class="w3-container w3-text-black"> <strong> Webeng </strong> </h1>
						
								
							
							</div>
							</br></br></br>
							<p style="text-align:center; font-size:20px; font-family:verdana";>Συγχαρητήρια! 'Εχετε ολοκληρώσει με επιτυχία την διαδικασία.</br>Πατήστε στο παρακάτω κουμπί για να επιστρέψετε στην αρχική σελίδα.</p>
							</br></br>
							<div class="w3-btn w3-blue w3-padding-large" style="width:300px; position:fixed; left:800px;" onclick="window.location.href='arxikh.php'">Μετάβαση στην Αρχική σελίδα</div>
							
							
					</div>		
							
			</body>
			
</html>