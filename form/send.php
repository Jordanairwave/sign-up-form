<?php

	if (!empty($_POST))
	{
		//Get form imputs
		$forename = $_POST['forename'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$birthday = $day . '/' . $month . '/' . $year;
		$code = $_POST['code'];
		$from = 'From: no-reply@ENTER-YOUR-DOMAIN-HERE.com';
		$to = 'jordan@websir.co.uk';
		$subject = 'New sign up from website';
		
		//construct email message
		$body = "Name: $forename $surname\n Email: $email\n Birthday: $birthday\n Code: $code";
		
		//Send email messsage
		if(mail ($to, $subject, $body, $from)) {
		
			//Save Email to a txt file in the resutls folder.
			$myFile = 'results/email_'.date('d-m-Y_hia').'.txt';
			$fh = fopen($myFile, 'w+');
			fwrite($fh, $body);
			fclose($fh);
			
			//Save Email to a database
			//$db_Name = 'ENTER DATABASE NAME';
			//$db_Host = 'ENTER DATABASE HOST';
			//$db_User = 'ENTER DATABASE USERNAME';
			//$db_Pass = 'ENTER DATABASE PASSWORD';
			
			//$sql_connection = mysqli_connect("$db_Host", "$db_User", "$db_Pass") or die("Cannot Connect to Database");
		    //mysqli_select_db($sql_connection, $db_Name);
			
			//$forename = mysqli_real_escape_string($sql_connection, $forename);
			//$surname = mysqli_real_escape_string($sql_connection, $surname);
			//$email = mysqli_real_escape_string($sql_connection, $email);
			//$birthday = mysqli_real_escape_string($sql_connection, $birthday);
			//$code = mysqli_real_escape_string($sql_connection, $code);
			//$dateReceived = date('d-m-Y_hia');
			
			//$sql = "INSERT INTO contacts SET `forename`='$forename', `surname`='$surname', `email`='$surname', `birthday`='$birthday', `code`='$code', `date`='$dateReceived'";
			
			//mysqli_query($sql_connection, $sql);
			
			//mysqli_close($sql_connection);
		
			// Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
		} else {
			// Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
		}
		
	}

?>