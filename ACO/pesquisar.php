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
            <li><a href="index.php"><i class="fas fa-home"></i> <span>INICIO</span></a></li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i> <span>Cadastre-se</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="bib-cad.php"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Leitor</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fas fa-sign-in-alt"></i> <span>Login</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="adm-login.php"><i class="fa fa-circle-o"></i> Administrador</a></li>
                <li><a href="bib-login.php"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Leitor</a></li>
              </ul>
            </li>
            <li>
                <form class="form-control-sm" method="GET" action="pesquisar.php">
                    <input class="form-control" type="text" name="pesquisar" placeholder="Pesquisar" aria-label="Search" style="width: 175px; margin-left: 1em; margin-top: 1em">
                </form>
            </li>
          </ul>
        </nav>
      </aside>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>

<?php 

$pesquisar = $_GET['pesquisar'];

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','bd_aco');
$connect = new mysqli (HOST, USER, PASS, BASE);


//pesquisa nos registros de obras
$res = "SELECT * from obra_literaria
WHERE titulo LIKE '%$pesquisar%' LIMIT 10";
$query_res = mysqli_query($connect, $res);
$rows_res = mysqli_fetch_array($query_res);

/*
$bib = "SELECT nomeBIB from biblioteca
INNER JOIN obra_literaria
ON biblioteca.idBIB = obra_literaria.biblioteca_idBIB
WHERE ";
*/

@$qtd = $res->num_rows;
if($qtd==0){
    print "<br><br><div class='alert alert-danger' style='width: 600px'>Nenhum resultado encontrado.</div>";
}
else{
print "<br><br>";
print $qtd." resultado(s) encontrado(s). <br><br>";
print "<table class='table table-striped table-hover'>";
	print "<tr>";
		print "<th>Título</th>";
		print "<th>Autor</th>";
		print "<th>Biblioteca</th>";
    print "</tr>";    
    while($rows_res){
        print "<tr>";
            print "<td>".$row->titulo."</td>";
            print "<td>".$row->autor."</td>";
            print "<td>".$bib."</td>";
        print "</tr>";
    }
print "</table>";
}
///////////////////////////////////////////////////////////////
?>

</div>
</div>
<div>
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