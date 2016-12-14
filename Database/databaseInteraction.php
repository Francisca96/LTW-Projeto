<?php
include_once('../database/connection.php');

function getUser($username){
    global $db;
    $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->execute(array($username));
    $result = $stmt->fetchAll();
    return $result;
}

function getUserInfo($username){
  global $db;
  $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
  $stmt->execute(array($username));
  return $stmt->fetch();
}

function putUser($username,$password,$name,$email,$gender, $type){
    global $db;
    $stmt = $db->prepare("INSERT INTO user VALUES(?,?,?,?,?,?)");
    $stmt->execute(array($username,$password,$name,$email,$gender,$type));
	
	if($type == "client")
		$stmt2 = $db->prepare("INSERT INTO client VALUES(?)");
	else 
		$stmt2 = $db->prepare("INSERT INTO owner VALUES(?)");
	
    $stmt2->execute(array($username));
	return $stmt2->errorCode();
}

function getAllUsers(){
    global $db;
    $stmt = $db->prepare("SELECT * FROM user");
    $stmt->execute(array($username));
    $result = $stmt->fetchAll();
    return $result;
}

function getAllClients(){
    global $db;
    $stmt = $db->prepare("SELECT * FROM client");
    $stmt->execute(array($username));
    $result = $stmt->fetchAll();
    return $result;
}

function getAllOwners(){
    global $db;
    $stmt = $db->prepare("SELECT * FROM owner");
    $stmt->execute(array($username));
    $result = $stmt->fetchAll();
    return $result;
}

function getOwnerRestaurants($username){
    global $db;
    $stmt = $db->prepare("SELECT id_restaurant FROM ownerRestaurant WHERE username = ?");
    $stmt->execute(array($username));
    $result = $stmt->fetchAll();
    return $result;
}

function getAllRestaurantNames(){
  global $db;
  $stmt = $db->prepare("SELECT id,name FROM restaurant");
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}

function getAllRestaurantTypes(){
    global $db;
    $stmt = $db->prepare("SELECT id,type FROM restaurant");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getRestaurant($id){
    global $db;
    $stmt = $db->prepare("SELECT * FROM restaurant WHERE id = ?");
    $stmt->execute(array($id));
    $result = $stmt->fetchAll();
    return $result;
}

function getRestaurantReviews($id_restaurant){
    global $db;
    $stmt = $db->prepare("SELECT * FROM review WHERE id_restaurant = ?");
    $stmt->execute(array($id_restaurant));
    $result = $stmt->fetchAll();
    return $result;
}

function putReview($id_restaurant, $username, $text, $value){
    global $db;
    $stmt = $db->prepare("INSERT INTO review VALUES(NULL,?,?,?,?)");
    $stmt->execute(array($id_restaurant, $username, $text, $value));
	return $stmt->errorCode();	
}

function putRestaurant($name,$location,$type,$description){
    global $db;
    $stmt = $db->prepare("INSERT INTO restaurant VALUES(NULL,?,?,?,?)");
    $stmt->execute(array($name,$location,$type,$description));
	return $stmt->errorCode();	
}

function getRestaurantByName($name){
  global $db;
  $stmt = $db->prepare("SELECT * FROM restaurant WHERE name = ?");
  $stmt->execute(array($name));
  return $stmt->fetch();
}

function getRestaurantByLocation($location){
  global $db;
  $stmt = $db->prepare("SELECT * FROM restaurant WHERE location = ?");
  $stmt->execute(array($location));
  return $stmt->fetch();
}

function addOwner($id_restaurant, $username){
    global $db;
    $stmt = $db->prepare("INSERT INTO ownerRestaurant VALUES(?,?)");
    $stmt->execute(array($username, $id_restaurant));
}

function getOwners($id_restaurant){
    global $db;
    $stmt = $db->prepare("SELECT username FROM ownerRestaurant WHERE id_restaurant = ?");
    $stmt->execute(array($id_restaurant));
    $result = $stmt->fetchAll();
    return $result;
}

function getPassword($username){
  global $db;
  $stmt = $db->prepare("SELECT password FROM user WHERE username = ?");
  $stmt->execute(array($username));
  $result = $stmt->fetch();
  return $result[0];
}

function changeUserPassword($username,$newPassword){
  global $db;
  $stmt = $db->prepare('UPDATE user SET password = ? WHERE username = ?');
	return $stmt->execute(array($newPassword, $username));
}

?>