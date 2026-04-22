<?php
include 'database.php';

$id = $_GET['id'];

$conn->query("DELETE FROM supplies where id = $id");

header("Location: index.php");

?>