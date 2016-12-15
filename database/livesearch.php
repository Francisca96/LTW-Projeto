<?php

include_once('../database/connection.php');

	global $db;
	$stmt = $db->prepare("SELECT * FROM restaurant WHERE name LIKE ?");
	$stmt->execute(array($_GET['key']));
    $result = $stmt->fetchAll();

	echo $response;
?>