<?php
$dbname = 'herborist_api';
$host = 'localhost';
$username = 'root';
$password = '';

$connection = mysqli_connect($host,$username,'',$dbname);
mysqli_set_charset($connection, 'utf8mb4'); //pour permettre l'affichage de caractères spéciaux à combiner avec le flag JSON_UNESCAPED_UNICODE 

if(!$connection){
    echo '';
    die();
} else{
    echo '';
}

?>