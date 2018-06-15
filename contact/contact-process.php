<?php
	include '../phpmailer/PHPMailerAutoload.php';

	$gmailUsername = "davidmendozaofficial@gmail.com";
	$gmailPassword = "FroztByte04\m/";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = $gmailUsername;
    $mail->Password = $gmailPassword;
    $mail->SetFrom($gmailUsername, "FSB Consultants Inc.");
    $mail->Subject = "Inquiries";

    // EMAIL
    $mail->Body = '
		<b>From: </b> ' . $_POST['name'] . '<br>
		<b>Email: </b> ' . $_POST['email'] . '<br>
		<b>Phone: </b> ' . $_POST['phone'] . '<br>
		<b>Message: </b> ' . $_POST['message'] . '<br>
    ';

    // KUNG SINO MAKAKA RECEIVE NG EMAIL
    $mail->AddAddress('davidmendozaofficial@gmail.com');
    
    if (!$mail->Send()) 
    {
    	echo "ERROR!";
    } 
    else {
        echo "Success";
    }
?>