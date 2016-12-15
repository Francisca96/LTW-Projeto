<?php
session_start();

if($_SESSION['name']){
    session_unset();
    session_destroy();
	header("Location: main.php");
}

 ?>