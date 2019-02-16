
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Empresa</title>
    <?php include("../conf/db.php")?>
</head>
<body>
<div class="container col-6">
                <?php 
                $id=$_GET["id"];
                    $query="SELECT Nombre,Direccion,Telefono,Correo FROM empresa WHERE Id_Empresa='$id';";
                    $resultado= mysqli_query($conn,$query);
                ?>
    <form action="Editar_Empresa.php" method="POST">
            <h3>Añadir Empresas</h3>
            <?php while($fila=mysqli_fetch_array($resultado)){?>
            <div class="form-group">
             
              <input type="text" class="form-control invisible" id="inputNombreEmpresa" name="Id" aria-describedby="emailHelp"  value="<?php echo $_GET["id"]?>" placeholder="Nombre de la empresa">
            </div>
            <div class="form-group">
              <label for="inputNombreEmpresa">Nombre</label>
              <input type="text" value="<?php echo $fila["Nombre"] ;?>" class="form-control" id="inputNombreEmpresa" name="nombre" aria-describedby="emailHelp" placeholder="Nombre de la empresa">
            </div>
            <div class="form-group">
              <label for="inputDireccionEmpresa">Dirección</label>
              <input type="text" value="<?php echo $fila["Direccion"]; ?>" class="form-control" id="inputDireccionEmpresa" name="direccion" placeholder="Dirección">
            </div>
            <div class="form-group">
              <label for="inputTelefonoEmpresa">Teléfono</label>
              <input type="phone"  value="<?php echo $fila["Telefono"]; ?>" class="form-control" id="inputTelefonoEmpresa" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <label for="inputCorreoEmpresa">Email</label>
              <input type="email" value="<?php echo $fila["Correo"]; ?>" class="form-control" id="inputCorreoEmpresa" name="email" placeholder="Email">
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary" name="Update_Empresa" >Guardar</button>
            <button type="submit" class="btn btn-danger" name="Cancelar" >Cancelar</button>
          </form>

    </form>

</div>


<script src="../js/funciones.js"></script>
  <script type="../js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
