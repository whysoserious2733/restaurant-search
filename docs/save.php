<?php 

session_start();

	include 'dbh.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	


$sql = "INSERT INTO users (name, email, comment) 
VALUES ('$name','$email','$comment')";
$result = $conn->query($sql);

header("Location: feedback.php");

?>