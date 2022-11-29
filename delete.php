<?php

if(isset($_GET["id"])){
	$id = $_GET["id"];

	$conn = mysqli_connect('localhost', 'root', '', 'book_db');
	if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $sql = "DELETE FROM book_form WHERE id=$id";
    $conn->query($sql);
}

header("location: admin.php");
exit;

?>