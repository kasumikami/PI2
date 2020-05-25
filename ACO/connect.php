<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','aco');
$connect = new mysqli(HOST,USER,PASS,BASE);

if($connect === false){
    die("ERRO: Falha ao conectar-se." . mysqli_connect_error());
}
?>