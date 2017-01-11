<!DOCTYPE html>

<html>

	<head>

		<title> Welcome to Webeng </title>
		
		<meta charset="UTF-8">
		<meta name="description" content="Meeting scheduling site">
		<meta name="keywords" content="doodle_like,meeting,appointment,scheduling">
		<meta name="author" content="kostasal,kospal,thedog">
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
         
		<link rel="stylesheet" type="text/css" href="css/arxikh.css">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		
		
		<script>
		    //clear textboxes
			function ClearFields() {

			document.getElementById("login").value = "";
			document.getElementById("cancel").value = "";
			}
		
		</script>	
		
		
	</head>
	
	
			<body>
					
				<div id="demo">
			
						<div class="w3-card w3-green w3-bottombar w3-border-grey" style="height:150px;">
			
							<div class="mywebeng"><strong>Webeng</strong></div>
						
								<label class="w3-text-black w3-myuser">Username:</label>
								<input id="login" class="w3-text-black" type="text" name="username"> 
								<label class="w3-text-black">Password:</label> 
								<input id="cancel" class="w3-text-black" type="password" name="password">
								<input class="mine" type="submit" name="login" value="Login">
								<input class="mine2" type="reset" name="cancel" value="Cancel" onclick="ClearFields();">
								 
								
						
						
						
								<div class="w3-myclass">
							
									<ul class="w3-pagination w3-large">
							
							
										<li><a class="w3-red w3-myborder" href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">&raquo;</a></li>
						 
									</ul>
							
								</div>
						
						</div>
							
								<div class="mysettings w3-right">
								
									
									
									<h1><strong>Εγγραφή</strong></h1>
									<p class="w3-large">Ας δημιουργήσουμε τον τόπο συνάντησής μας!</p>
									
									
									
									<script>
									
									//elegxos gia thn egkurothta twn email
									
										function validateForm() {
											
											var x = document.forms["myform"]["email"].value;
											var atpos = x.indexOf("@");
											var dotpos = x.lastIndexOf(".");
											
											if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
												
												alert("Έχετε πληκτρολογήσει ένα μη έγκυρο email! Δοκιμάστε πάλι.");
												return false;
											}
										}
									
									</script>
									
					
									<form name="myform" method="post" onsubmit="return validateForm();"  action="gf.php"> 
							
									<label class="w3-label"> Τίτλος </label>
									<input class="w3-input" type="text" name="title" placeholder="Εισάγετε τον τίτλο" size=20>
									</br>
									<label class="w3-label">Όνομα </label> <span id='result'> </span>
									<input class="w3-input" type="text" name="name" placeholder="Εισάγετε το όνομά σας" size=20 required>
									</br>
									<label class="w3-label">Email</label>  <span> </span> 
									<input class="w3-input" type="text"  name="email" placeholder="Εισάγετε το email σας" required>
									</br>
									<label class="w3-label">Τοποθεσία</label>
									<input id="geocomplete" class="w3-input" type="text"  name="location" placeholder="Εισάγετε την τοποθεσία">
									</br>
									<label class="w3-label">Σχόλια συνάντησης</label></br>
									<textarea name="comment" rows=4 cols=45  placeholder=" Εισάγετε το σχόλιό σας..."></textarea>
									</br></br>
									<input class="w3-btn w3-red" type="submit" value="Καταχώρηση" name="endform">								
				
									</form>
									
										
								</div>
						
						
									<div class="w3-card-0 w3-container" style="width:600px;height:600px">
						
						
										<h1 class="myh1"> Webeng Meeting Scheduler </h1>
										<p class="w3-large"> Tο <strong> Webeng </strong> είναι ένα σύστημα τύπου doodle.Οι χρήστες θα μπορούν να ψηφίζουν για την επιλογή μέρας/ώρας για μια συνάντηση.</p>
							
										</br></br>
					
										<img class="w3-left" src="https://bombich.scdn1.secure.raxcdn.com/sites/default/files/features/task-scheduling.png" alt="Image is not showed" width="600" height="400">
						
					
									</div>
								
					
										<div class="w3-display-bottommiddle">
								
											<footer class="w3-teal w3-topbar w3-border-black w3-xlarge">Webeng 2016&#169;</footer> 
									
										</div>
				
				</div>
				
			</body>
			
</html>