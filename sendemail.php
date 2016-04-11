<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    //$name = @trim(stripslashes($_POST['name']));
	$fname = @trim(stripslashes($_POST['fname']));
	$lname = @trim(stripslashes($_POST['lname']));
    $email = @trim(stripslashes($_POST['email']));
    $subject = "New message from " . $fname ." " . $lname;
    $message = @trim(stripslashes($_POST['message']));
    $email_from = $email;
    $email_to = 'yketkar@indiana.edu';

    $body = 'First Name: ' . $fname . "\n\n" . 'Last Name: ' . $lname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message:' . "\n\n" . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
