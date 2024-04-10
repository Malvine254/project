<?php
require 'config.php'; 
function submitContactForm(){
	global $conn;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$organization = $_POST['organization'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	// Prepare and bind the SQL statement
	$stmt = $conn->prepare("INSERT INTO contacts (name, email, organization, phone, message) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $name, $email, $organization, $phone, $message);
	
	// Execute the statement
	if ($stmt->execute()) {
		echo "<script>alert('Message was sent Successfully')</script>";
	} else {
		echo "<script>alert('Failed')</script>";
	}
	
	// Close the statement
	$stmt->close();
}

<<<<<<< HEAD
function scheduleConsultant(){
    global $conn;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$organization = $_POST['organization'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$service_name = $_POST['service_name'];
	
	// Prepare and bind the SQL statement
	$stmt = $conn->prepare("INSERT INTO consultation (name, email, organization, phone, message, service_name) VALUES (?, ?, ?, ?, ?,?)");       
	$stmt->bind_param("ssssss", $name, $email, $organization, $phone, $message,$service_name);
	
	// Execute the statement
	if ($stmt->execute()) {
		echo "<script>alert('Message was sent Successfully')</script>";
	} else {
		echo "<script>alert('Failed')</script>";
	}
	
	// Close the statement
	$stmt->close();
}

if (isset($_POST['submit_form'])) {
	submitContactForm();
}
if (isset($_POST['consultation_btn'])) {
	scheduleConsultant();
}
=======
if (isset($_POST['submit_form'])) {
	submitContactForm();
}
>>>>>>> 08cb6bd748b01a9b5d60c749cf1dbd996506eb0e
?>
