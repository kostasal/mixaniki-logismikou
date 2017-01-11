<?php
 
   if(isset($_POST['endform']))
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

	
		$value = $_POST['title'];
		$value2= $_POST['name'];
		$value3= $_POST['email'];
		$value4= $_POST['location'];
		$value5= $_POST['comment'];

	$sql= "INSERT INTO Arxikh (title,name,email,location,comment) VALUES('$value','$value2','$value3','$value4','$value5')";

	if (mysqli_query($conn, $sql)) {
		
		/*echo "Successfull connection!";*/
	
		
	} else {
		
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


	mysqli_close($conn);
	

	//let's start the session
	session_start();
	
	//finally, let's store our posted values in the session variables
	$_SESSION['title'] = $_POST['title'];
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['location'] = $_POST['location'];
	$_SESSION['comment'] = $_POST['comment'];
	
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
			
			
			
			<script>
			
					$(document).ready(function(){
						$("button#hit").click(function () {
							var text = $("input#datetimepicker4").val();
							$("input#en").val(text);
						});
					});
					
			</script>
			
			
			<script>
			
					$(document).ready(function(){
						$("button#hit3").click(function () {
							var text = $("input#datetimepicker4").val();
							$("input#en3").val(text);
						});
					});
					
			</script>
			
			
			
			<script>
			
					$(document).ready(function(){
						$("button#hit2").click(function () {
							var text = $("input#datetimepicker5").val();
							$("input#en2").val(text);
						});
					});
					
			</script>
			
			
			<script>
			
					$(document).ready(function(){
						$("button#hit4").click(function () {
							var text = $("input#datetimepicker5").val();
							$("input#en4").val(text);
						});
					});
					
			</script>
			
			
			
	</head>
			
			<body>
			<div id="dem">	
			
				<div class="w3-middle w3-card-12 w3-white w3-mycard" style="width:1140px;height:760px;">
				
					
					<div class="w3-green w3-mytop w3-bottombar w3-border-grey" style="height:100px;">
					
						<div class="w3-right w3-margin">
					
							<ul class="w3-pagination w3-large w3-panel">
							
										<li><a href="arxikh.php">&laquo;</a></li>
										<li><a href="arxikh.php">1</a></li>
										<li><a class="w3-red w3-myborder w3-myborder" href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">&raquo;</a></li>
						 
							</ul>
							
						</div>
						
							
							<h1 class="w3-container w3-text-black"> <strong> Webeng </strong> </h1>
						
								
							
					</div>
					
								<h1 class="w3-center w3-xxlarge"><strong>Select Appointment Date And Time</strong></h1> 
								<p class="w3-center w3-large">Παρακάτω μπορείτε να επιλέξετε την ημερομηνία έναρξης και την ημερομηνία λήξης της συνάντησης</p>
								<p class="start">Επιλογή έναρξης συνάντησης</p>
								<p class="end">Επιλογή λήξης συνάντησης</p>
					
							<div class="w3-mystart w3-left"><input id="datetimepicker4" type="text"></div>
							
						
			
								<script>
			
									jQuery('#datetimepicker4').datetimepicker({
									format:'d/m/Y    H:i',
									lang:'en',
									theme:'dark',
									step:30,
									startDate:new Date(),
									opened:true,
									inline:true
									});
			
								</script>
					
									</br>
								
								
							<div class="w3-myend w3-right"><input id="datetimepicker5" type="text"></div>
			
								<script>
			
									jQuery('#datetimepicker5').datetimepicker({
									format:'d/m/Y    H:i',
									lang:'en',
									theme:'dark',
									step:30,
									startDate:new Date(),
									opened:true,
									inline:true
									});
			
								</script>
								
								
								
									
									
										<button class="w3-myk w3-btn w3-green w3-border w3-display-bottomleft" id="hit" name="enarksh">Έναρξη 1</button>
										
									    <button class="w3-display-bottomleft w3-myk3" type="reset" onclick="document.getElementById('en').value=''" value="Reset">Reset</button>
									
									
									
										<button  class="w3-display-bottomleft w3-myk4 w3-btn w3-red w3-border" id="hit3" name="enarksh2">Έναρξη 2</button>
										
										<button class="w3-display-bottomleft w3-myk6" type="reset" onclick="document.getElementById('en3').value=''" value="Reset">Reset</button>
										
									
									
									
									
										<button class="w3-display-bottomleft w3-myk7 w3-btn w3-green w3-border" id="hit2" name="lhksh">Λήξη 1</button>
										
										<button class="w3-display-bottomleft w3-myk9" type="reset" onclick="document.getElementById('en2').value=''" value="Reset">Reset</button>
										
								
								
									
									
										<button class="w3-display-bottomleft w3-myk10 w3-btn w3-red w3-border" id="hit4" name="lhksh2">Λήξη 2</button>
										
										<button class="w3-display-bottomleft w3-myk12" type="reset" onclick="document.getElementById('en4').value=''" value="Reset">Reset</button>
										
									
								
										<form action="my_con2.php" method="post">

											<div class="w3-display-bottomleft w3-myk2"><input id="en" name="arxh" type="text" readonly required></div>
											<div class="w3-display-bottomleft w3-myk5"><input id="en3" name="arxh2" type="text" readonly></div>
											<div class="w3-display-bottomleft w3-myk8"><input id="en2" name="telos" type="text" readonly></div>
											<div class="w3-display-bottomleft w3-myk11"><input id="en4" name="telos2" type="text" readonly></div>
											<input type="submit" name="pros3" class="w3-mypos w3-btn w3-blue w3-large" value="Επόμενο &raquo;">
								
										</form>
								
				</div>
							
							<footer>
						
								</br>
						
								<h3 class="web">Webeng 2016&#169;</h3>
					
							</footer>
			</div>
			</body>
			
</html>