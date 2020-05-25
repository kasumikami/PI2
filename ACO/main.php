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
          <a class="navbar-brand" href="index.php">ACO</a>
        </div>
        <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li><a href="#"><i class="fas fa-home"></i> <span>INICIO</span></a></li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i> <span>Cadastre-se</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Leitor</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-sign-in-alt"></i> <span>Login</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Administrador</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Leitor</a></li>
              </ul>
            </li>
            <li>
                <form class="form-control-sm" method="GET" action="#">
                    <input class="form-control" type="text" name="pesquisar" placeholder="Pesquisar" aria-label="Search" style="width: 175px; margin-left: 1em; margin-top: 1em">
                </form>
            </li>
          </ul>
        </nav>
      </aside>
    </div>

    <!--------------------------conteudo------------------------------------------->
    



















    <!----------------------------------------------------------------------------->
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
