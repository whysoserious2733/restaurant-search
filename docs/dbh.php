<?php

$conn = mysqli_connect("localhost", "root", "", "fdb");


if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
	}
	
?>