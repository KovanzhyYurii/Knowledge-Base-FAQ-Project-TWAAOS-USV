<?php
    header('Content-type: application/json');
    $status = array(
        'type'=>'success',
        'message'=>'Vă mulțumim că ne-ați contactat cât de curând vă vom contacta '
    );

    $name=@trim(stripslashes($_POST['name'])); 
    $email=@trim(stripslashes($_POST['email'])); 
    $phone=@trim(stripslashes($_POST['phone'])); 
	$subj=@trim(stripslashes($_POST['subj'])); 
    $message=@trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'anamiron376@gmail.com';//replace with your email

    $body = 'Nume complet: ' . $name . "\n\n" . 'Adresa de e-mail: ' . $email . "\n\n" . 'Subiect: ' . $subj ."\n\n" . 'Telefon: ' . $phone ."\n\n" . 'Mesaj: ' . $message;

    $success = @mail($email_to, $phone, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;