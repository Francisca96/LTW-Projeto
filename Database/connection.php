<?php
try{
    $db = new PDO("'sqlite:db.db'","","",array(
        PDO::ATTR_PERSISTENT => true
    ));
}
catch(PDOException $e) {
    die($e->getMessage());
}
?>
