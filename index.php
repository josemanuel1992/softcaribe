<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Softcaribe | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://softcaribe.com.mx" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Softcaribe</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="img/SoftCaribe.png" class="img-responsive"> <a href=""></a></span>
   
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
             <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">             
              <span class="hidden-xs">Cerrar Sesión</span>
            </a>
            <ul class="dropdown-menu">              
              <li class="user-footer">            
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">CERRAR SESIÓN</a>
                </div>
              </li>
            </ul>
          </li>       
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">        
        <div class="pull-left info">
          <p>Junior Estevez</p><br><br>          
        </div>
      </div>          
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
         <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span> 	Usuario</span>             	
            </span>
          </a>        
        </li>    
        <li class="treeview">
          <a href="status.php">
            <i class="fa fa-table"></i> <span>Status</span>          
          </a>         
        </li>     
        <li class="treeview">
          <a href="servicios.php">
            <i class="fa fa-folder"></i> <span>Servicios</span>            
          </a>          
        </li>
        <li class="treeview">
          <a href="nivel.php">
            <i class="fa fa-share"></i> <span>Nivel</span>            
          </a>         
        </li>    	 	
      </ul>
    </section>  
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario
        <small>Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert" id="register_form" style="display:none;">
          <strong>Bien Hecho!</strong> Tus datos se guardaron correctamente.
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 consultar">
        
      </div>
      <div class="col-md-4 formulario">
        <form action="#" id="frmDatos">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre">
          </div>
          <div class="form-group">
            <label for="aPaterno">Apellido Paterno</label>
            <input type="text" id="aPaterno" class="form-control" name="aPaterno">
          </div>
          <div class="form-group">
            <label for="aMaterno">Apellido Materno</label>
            <input type="text" id="aMaterno" class="form-control" name="aMaterno">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" class="form-control" name="telefono">
          </div>
          <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="mail" id="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" class="form-control" name="usuario">
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control">
          </div>
          <div class="form-group">
            <label for="git">Github</label>
            <input type="text" id="git" name="git" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" id="btnInsertar">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      recargar();
    });

    function recargar(){
      $(".consultar").load("views/usuarios.php");
    }
    $("#btnInsertar").click(function(e){
      e.preventDefault();
      var datos = $("#frmDatos").serialize();
      $.ajax({
        type: "POST",
        url: "actions/insertarUsuario.php",
        data: datos,
        success: function() {
            $('#register_form').html();
            $('#register_form').removeClass("alert-info");
          $('#register_form').addClass("alert-success");
            $('#register_form').html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>Tus datos han sido guardados correctamente!</p>').slideDown("slow", function(){$("#register_form").delay(3000).slideUp("slow");});
              recargar();
              $('#frmDatos').trigger("reset");
          }
      });

    });







  </script>
        
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; 2017 <a href="http://softcaribe.com.mx">Sotcaribe</a>.</strong> All rights
    reserved.
  </footer>

 
</div>







<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>
</html>
