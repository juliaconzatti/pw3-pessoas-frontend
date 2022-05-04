<?php
session_start();

$id = $_GET['id'];

$pessoas = $_SESSION['pessoas'];
foreach($pessoas as $p) {
    if ($p['id']==$id){
        print json_encode($p);
        die();
    } 
}
header("HTTP/1.0 404 Not Found");
print json_encode("Usuário não encontrado!");
?>