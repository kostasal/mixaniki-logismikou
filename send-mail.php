<?php

	$to  = "$msg5";   // this is your Email address
	$to .= ", $msg6"; //deutero email
	$to .= ", $msg7"; //trito email
	$to .= ", $msg8"; //tetarto email
	$to .= ", $msg9"; //pempto email
	
    $from = $_SESSION['email']; // this is the sender's Email address
	
	$subject = "Webeng ειδοποίηση: ".$_SESSION['title'];
	$message = "Ο χρήστης με το όνομα " .$_SESSION['name']. " και με διεύθυνση email: " .$_SESSION['email']. " σας προσκαλεί για μία συνάντηση στην τοποθεσία: " 
	.$_SESSION['location']. " την ημέρα/τις ημέρες: " . $_SESSION['arxh']." || ".$_SESSION['arxh2'] . " έως τις " .$_SESSION['telos']." || ".$_SESSION['telos2'] . 
	". Παρακάτω σας περιγράφει με λεπτομέρειες με ποιον τρόπο μπορείτε να συνατηθείτε.</br></br> <b>Πληροφορίες</b> </br></br>" . $_SESSION['comment'];
	 
	$headers = "From:" .$from. "\r\n" .
	           'MIME-Version: 1.0' . "\r\n" .
               'Content-type: text/html; charset=utf-8';

			   
	$check = false; // arxikopoihsh flag metavlhths
	
	if(mail($to, $subject, $message, $headers))
	{	
		$check = true;
		$message = "Επιτυχής αποστολή δεδομένων!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}	
	
	if($check == false)
	{
		$message2 = "Υπήρξε κάποιο πρόβλημα στην αποστολή δεδομένων! Παρακαλώ δοκιμάστε ξανά.";
		echo "<script type='text/javascript'>alert('$message2');</script>";
		echo '<script type="text/javascript">window.location = "my_con2.php"</script>';
	}
?>