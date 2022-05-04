<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=pw3", "root", "");
    $pessoas = [];
    foreach ($db->query("
        SELECT *, CONCAT(nome, ' ', sobrenome) as nome_completo 
        FROM pessoas
        ") as $pessoa){
        $pessoas[] = [
            "id" => $pessoa['id'],
            "nome" => $pessoa['nome'],
            "sobrenome" => $pessoa['sobrenome'],
            "dtnasc" => $pessoa['dtnasc'],
            "nomeCompleto" => $pessoa['nome_completo']
        ];
    }
    print json_encode($pessoas);
} catch(PDOException $e){
    die($e->getMessage());
}
?>