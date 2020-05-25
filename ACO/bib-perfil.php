<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta content='IE=edge' http-equiv='X-UA-Compatible'/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <meta content='' name='author'/>
    <meta content='' name='description'/>
    <meta content='' name='keywords'/>
    <link href='css/bootstrap.min.css' media='all' rel='stylesheet' type='text/css'/>
    <link href='css/font-awesome.min.css' media='all' rel='stylesheet' type='text/css'/>
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
    <script src="https://kit.fontawesome.com/bf4d0ad315.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class='wrapper'>
      <aside class="sidebar-left navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ACO</a>
        </div>
        <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li><a href="bib-perfil.php"><i class="fas fa-user"></i> <span>PERFIL</span></a></li>
            <li><a href="bib-cad-obra.php"><i class="fa fa-edit"></i> <span>Cadastrar Obra</span></a></li>
            <li><a href="#"><i class="fas fa-book"></i> <span>Meu Acervo</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a></li>
            
          </ul>
        </nav>
      </aside>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-9'>
            <?php 
            if(isset($_SESSION['usuario'])){

                define('HOST','localhost');
                define('USER','root');
                define('PASS','');
                define('BASE','aco');
                $connect = new mysqli(HOST,USER,PASS,BASE);
                    $results = mysqli_query($connect, "SELECT * FROM biblioteca WHERE idBIB=".$_SESSION['usuario']); ?>
                    <br>
                                <?php while ($row = mysqli_fetch_array($results)) { ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">PERFIL 
                                            <a href="#.php?edit=<?php echo $row['idBIB']; ?>" class="edit_btn"> <i class='fa fa-edit' title='Editar'></i></a>
                                            <a href="#.php?del=<?php echo $row['idBIB']; ?>" class="del_btn"><i class='fa fa-times-circle' title='Excluir' style='color:red;'></i></a>
                                        </div>
                                    <div class="panel-body">
                                    <b><p>Usuário: </b><?php echo $row['loginBIB']; ?><p><hr>
                                    <b><p>Nome: </b><?php echo $row['nomeBIB']; ?><p><hr>
                                    <b><p>Email: </b><?php echo $row['emailBIB']; ?><p><hr>
                                    <b><p>Telefone: </b><?php echo $row['telefone']; ?><p><hr>
                                    <b><p>Endereço: </b><?php echo $row['endereco']; ?><p><hr>
                                    <b><p>Horário de Funcionamento: </b><?php echo $row['horarioFuncionamento']; ?><p><hr>
                                        <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
      </div>
        <script src='js/jquery.min.js' type='text/javascript'></script>
        <script src='js/bootstrap.min.js' type='text/javascript'></script>
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script src="js/validator.min.js"></script>
        
        <script>
        $('.sidebar-menu').SidebarNav()
        </script>
    </body>
</html>

<footer>
  <p></p>
</footer>