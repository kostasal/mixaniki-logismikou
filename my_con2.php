<?php

   if(isset($_POST['pros3']))
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

		$value = $_POST['arxh'];
		$value2= $_POST['arxh2'];
		$value3= $_POST['telos'];
		$value4= $_POST['telos2'];
		

	$sql= "INSERT INTO gf (arxh,arxh2,telos,telos2) VALUES('$value','$value2','$value3','$value4')";

	if (mysqli_query($conn, $sql)) {
		
		/*$message = "Η καταχώρηση ολοκληρώθηκε!";
		echo "<script type='text/javascript'>alert('$message');</script>";*/
		
	} else {
		
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
	
	$msg=$_POST["arxh"];
	$msg2=$_POST["arxh2"];
	$msg3=$_POST["telos"];
	$msg4=$_POST["telos2"];
	
	
	//let's start the session
	session_start();
	
	$_SESSION['arxh'] = $_POST['arxh'];
	$_SESSION['arxh2'] = $_POST['arxh2'];
	$_SESSION['telos'] = $_POST['telos'];
	$_SESSION['telos2'] = $_POST['telos2'];
	
	
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
			
						<div class="w3-middle w3-card-12 w3-white w3-mycard" style="width:1140px;height:760px;">
				
					
							<div class="w3-green w3-mytop w3-bottombar w3-border-grey" style="height:100px;">
					
								<div class="w3-right w3-margin">
					
									<ul class="w3-pagination w3-large w3-panel">
							
										<li><a href="#">&laquo;</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a class="w3-red w3-myborder" href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">&raquo;</a></li>
						 
									</ul>
							
								</div>
						
							
										<h1 class="w3-container w3-text-black"> <strong> Webeng </strong> </h1>
						
								
							
							</div>
							<!--</br></br>
							<div style="position:fixed; left:1030px; top:250px;"><img class="w3-right w3-panel " src="http://downloadicons.net/sites/default/files/conference-icon-53436.png" width="450",height="570"></div>-->
							
							<p style="text-align:center; font-size:20px; font-family:verdana";>Στην παρακάτω φόρμα μπορείτε να επιλέξετε τα άτομα που θέλετε να λάβουνε τις επιλογές σας.</br>Το ανώτερο όριο email που μπορείτε να στείλετε είναι έως πέντε άτομα.</p>
							
							
							<div class="w3-center w3-margin-top w3-large">
							
							
								<form name="myform" action="my_con3.php" method="post">
							
									<fieldset style="width:700px; height:470px; margin-left:215px; border: 2px solid red;">
									
										<legend class="w3-label">Αποστολή δεδομένων:</legend>
										</br>
										<label="w3-label" style="display:inline-block; text-align:right;">Εισαγωγή του πρώτου email:</label> <!--display-inline block gia thn stoixhsh-->
										<input type="email" name="email1" style="width:270px;"  multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" value="" required>
										</br></br></br>
										<label>Εισαγωγή του δεύτερου email:</label>
										<input type="email" name="email2" style="width:270px;"  multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" value="">
										</br></br></br>
										<label>Εισαγωγή του τρίτου email:</label>
										<input type="email" name="email3" style="width:270px;"  multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" value="">
										</br></br></br>
										<label>Εισαγωγή του τέταρτου email:</label>
										<input type="email" name="email4" style="width:270px;"  multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" value="">
										</br></br></br>
										<label>Εισαγωγή του πέμπτου email:</label>
										<input type="email" name="email5" style="width:270px;"  multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" value="">
						
									</fieldset>		
									
									</br>
									<input type="submit" name="pros4" class="w3-btn w3-blue w3-large" value="Επόμενο &raquo;">
									
								</form>
								
							</div>
							
							
							
						</div>
				
					</div>
			
			
							<footer>
						
								</br>
						
								<h3 class="web">Webeng 2016&#169;</h3>
					
							</footer>
				
			</body>
			
</html>
				