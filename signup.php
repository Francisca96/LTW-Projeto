<?php

//incluir php com as funçoes precisas

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$username=$_POST['username'];
$password=$_POST['password'];
$passwordConfirmed=$_POST['passwordConfirm'];



if($firstName && $lastName && $username && $password && $passwordConfirmed){

	if(strlen($password)<8){
        include_once('register_page.php');
        echo 'Password is too short. Please choose a new one.';
        return;
  }

  if($password!==$passwordConfirmed){
        include_once('register_page.php');
        echo 'Password confirmation does not match.';
        return;
  }

	//Funçao criar novo utilizador (verifica se é novo o username)
  if(newUser($firstName,$lastName,$password,$email)==0){
    $userInfo = getUserInfo($email);
    $nomeCompleto = $userInfo['firstName'];
    $nomeCompleto .= " ";
    $nomeCompleto .= $userInfo['lastName'];
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $nomeCompleto;
    $_SESSION['id'] = $userInfo['id'];

	   //incluir php da pagina com login feito

  }
  else {
    include_once('register.php');
    echo 'Invalid account. Username already exists.';
    return;
  }
}
?>
