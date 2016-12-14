<?php
session_start();

if(isset($_SESSION['name'])){
    session_unset();
    session_destroy();
}

include_once('visitor.php');

 ?>