<?php 
session_start();
$login = $_POST['loginBIB'];
$senha = SHA1($_POST['senhaBIB']);

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','aco');
$connect = new mysqli(HOST,USER,PASS,BASE);

$select = "SELECT * FROM biblioteca WHERE loginBIB = '$login'";
$query1 = mysqli_query($connect, $select);
$array = mysqli_fetch_array($query1);
$logarray = $array['loginBIB'];
 

      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        bib-cadastrar.php';</script>";
        die();
 
      }else{
      
        $insert = "INSERT INTO biblioteca (nomeBIB, emailBIB, telefone, endereco, horarioFuncionamento, loginBIB, senhaBIB) 
        VALUES ('".$_REQUEST["nomeBIB"]."', '".$_REQUEST["emailBIB"]."', '".$_REQUEST["telefone"]."', '".$_REQUEST["endereco"]."', '".$_REQUEST["horarioFuncionamento"]."', '$login', '$senha')";
        $query = mysqli_query($connect, $insert);
        
        $logado_id = mysqli_insert_id($connect);
        $_SESSION['usuario'] = getUserById($logado_id);

         
            if($query){
              echo"<script language='javascript' type='text/javascript'>
              alert('Usuário cadastrado com sucesso!');window.location.
              href='bib-dash.php'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>
              alert('Não foi possível cadastrar esse usuário.');window.location
              .href='#'</script>";
            }
      }

      function getUserById($id){
        global $connect;
        $query = "SELECT * FROM biblioteca WHERE idBIB=" . $id;
        $result = mysqli_query($connect, $query);
        $usuario = mysqli_fetch_assoc($result);
        return $usuario;
      }
?>