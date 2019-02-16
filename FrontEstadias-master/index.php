<!DOCTYPE html>
<?php include("conf/db.php")?>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Estadías</title>
</head>
<body>
<?php if(isset($_SESSION["Matricula"])) { ?>
            <style media="screen">
                 #Inicio, #Empresas, #Proyectos, #Documentos, #Asesores-Empresariales,#cerrar {display:block;}
                 #Cuerpo {display:none}
            </style>
        
        <?php } else{ ?>
            <style media="screen">
              #Cuerpo {display:block}
                #Inicio, #Empresas, #Proyectos, #Documentos, #Asesores-Empresariales,#cerrar {display:none;}
             </style>
        <?php }?>

  <div w3-include-html="includes/navbar.html"></div>
  <div class="section jumbotron jumbotron-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12 bottom-margin text-center">
          <h1 class="text-primary">Gestión de estadías</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container" style="background:#fff;">
      <div class="row justify-content-center">
        <div id="Cuerpo" class="col-6">
          <form action="php/Login.php" method="POST">
            <div class="form-group">
              <label for="inputEmail">Usuario</label>
              <input type="email" class="form-control" id="InputEmail" name="Email" aria-describedby="emailHelp" placeholder="Ingresa tu usuario">
            </div>
            <div class="form-group">
              <label for="inputPassword">Contraseña</label>
              <input type="password" class="form-control" id="InputPassword" name="Password" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="Login">Ingresar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="js/funciones.js"></script>
  <script>
    includeHTML();
  </script>

</body>
</html>
