<?php
	// write in databse//

   	$host = 'db631353762.db.1and1.com';
	$dbname = 'db631353762';
	
	
	try {
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", 'dbo631353762', 'miaumonster');
	


	} catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
	}


	$req = $dbh->prepare('INSERT INTO ID(Name,Email,Text) VALUES(:u_name, :u_email, :message)');
	$req->execute(array(
	'u_name' => $_POST['u_name'],
	'u_email' => $_POST['u_email'],
	'message' => $_POST['message'],
	));

	//send email//
     $to      = 'contact@monstertruckagency.com';
     $subject = 'contact site web';
     $message = 'from: '.' '.$_POST['u_name'] . ' ' . $_POST['u_email'] . ' ' . $_POST['message'];
    

     mail($to, $subject, $message, $headers);
 

	echo '<div id="outputmessage">Miauuu!</div>';
?>




