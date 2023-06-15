<?php
    $_DATA=file_get_contents('php://input'); //funciona como input que recibe lo que se le envia en el caso de post
    $json=json_decode($_DATA,true); //convierte de json a string
    var_dump($json); //imprime el json

    $_DATA=json_decode(file_get_contents('php://input'),true); //funciona como input que recibe lo que se le envia en el caso de post
    $json=$_DATA,true); //convierte de json a string
?>