<?php

//incluir php com as funçoes precisas

  $username=$_POST['username'];
  $password=$_POST['password'];

  //$validPass = getPassword($username, $password);

  if ($validPass == $password){

    $userInfo = getUserInfo($username);

    //ver valores necessários de ir buscar

    //incluir php da pagina com login feito
  }
  else{
    include_once('login.php');
    echo "Username or Password incorrect";
  }
?>
