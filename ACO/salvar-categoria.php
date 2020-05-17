<?php

$categoria = $_POST['nomeCAT'];

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','bd_aco');
$conn = new mysqli(HOST,USER,PASS,BASE);

$insert = ("INSERT INTO categoria_obra (nomeCAT) VALUE ('$categoria')");
$res = $conn->query($insert);

if($res){
    echo"<script language='javascript' type='text/javascript'>
          alert('Categoria cadastrada com sucesso!');window.location.
          href='#'</script>";
}
else {
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar.');window.location
        .href='cad-categoria.php'</script>";
}
?>