<?php

	session_start();
	define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','aco');
    $connect = new mysqli(HOST,USER,PASS,BASE);

	$nome = "";
	$id = 0;

	if (isset($_POST['save'])) {
		$nome = $_POST['nomeCAT'];
		$cadastrar = mysqli_query($connect, "INSERT INTO categoria_obra (nomeCAT) VALUES ('$nome')"); 
		
		if($cadastrar){
			$_SESSION['message'] = "<div class='alert alert-success'>Categoria cadastrada com sucesso!</div>"; 
			header('location: categ-listar.php');
		}else{
			$_SESSION['message'] =  "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			header('location: categ-listar.php');
		}
		
    }
	
	if (isset($_POST['edit'])) {
		$id = $_POST['idCAT'];
		$nome = $_POST['nomeCAT'];
		$editar = mysqli_query($connect, "UPDATE categoria_obra SET nomeCAT='$nome' WHERE idCAT=$id");
		
		if($editar){
			$_SESSION['message'] = "<div class='alert alert-success'>Categoria editada com sucesso!</div>"; 
			header('location: categ-listar.php');
		}else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Não foi possível alterar.</div>";
			header('location: categ-listar.php');
		}
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		$deletar = mysqli_query($connect, "DELETE FROM categoria_obra WHERE idCAT=$id");

		if($deletar){
			$_SESSION['message'] = "<div class='alert alert-success'>Categoria deletada com sucesso!</div>"; 
			header('location: categ-listar.php');
		}else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Não foi possível deletar.</div>";
			header('location: categ-listar.php');
		}
		
	}
?>