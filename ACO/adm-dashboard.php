<?php 
SESSION_START();
if (!isset($_SESSION['loginADM']) and !isset($_SESSION['tipo_usuario_idUSUARIO']) && ($_SESSION['tipo_usuario_idUSUARIO'] != 1 )){
  header("Location:adm-login.php?erro=Usuário não logado no sistema");
}  
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
    <title>Dashboard</title>
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
            <li><a href="adm-dashboard.php"><i class="fas fa-user"></i> <span>PERFIL</span></a></li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i> <span>Categorias</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="cad-categoria.php"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Listar</a></li>
              </ul>
            </li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a></li>
            
          </ul>
        </nav>
      </aside>
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
