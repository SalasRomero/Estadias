
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title>Estadías | Asesor Empresarial</title>
</head>
<body>
    <?php include("conf/db.php")?>
  <div w3-include-html="includes/navbar.html"></div>

  <div class="section section-main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-primary">Gestión de Asesores Empresariales</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section bottom-margin">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <form action="php/Insertar_Asesor.php" method="POST">
            <h3>Añadir Asesor Empresarial</h3>
            <div class="form-group">
              <label for="inputNombreAsesor">Nombre</label>
              <input type="text" class="form-control" id="inputNombreAsesor" name="nombre" aria-describedby="emailHelp" placeholder="Nombre del Asesor">
            </div>
            <div class="form-group">
              <label for="inputTelefonoAsesor">Teléfono</label>
              <input type="phone" class="form-control" id="inputTelefonoAsesor" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <label for="inputAsesorCorreo">Email</label>
              <input type="email" class="form-control" id="inputAsesorCorreo" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="inputAsesorEmpresa">Empresa</label>
              <select class="form-control" name="AsesorEmpresa" id="inputAsesorEmpresa">
                <?php $query= "SELECT Id_Empresa, Nombre FROM empresa;"; 
                        $resultado=mysqli_query($conn,$query);
                    while($fila=mysqli_fetch_array($resultado)){
                ?>
                <option value="<?php echo $fila["Id_Empresa"]?>"><?php echo $fila["Nombre"]?></option>
                <!--<option value="Empresa2">Empresa2</option>-->
                    <?php } ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="Save_Asesor"  >Guardar</button>
          </form>
        </div>
        <div class="col-9">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Empresa</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                <?php $querytabla= "SELECT * FROM acesor_empresarial";
                        $resultadotabla=mysqli_query($conn,$querytabla);
                        while($filatabla=mysqli_fetch_array($resultadotabla)){
                    ?>
              <tr>
                <th><?php echo $filatabla["Nombre"];?></th>
                <td><?php echo $filatabla["Telefono"];?></td>
                <td><?php echo $filatabla["Correo"];?></td>
                <td><?php echo $filatabla["Id_Empresa"];?></td>
                <td> <a class="btn btn-warning" type="button" name="btnEditar" href="php/EditarAE_Vista.php?id=<?php echo $filatabla["Id_AEmpresarial"];?>">Editar</a> 
                <a class="btn btn-danger" type="button" name="btnEliminar"  href="php/Eliminar_Asesor.php?id=<?php echo $filatabla["Id_AEmpresarial"];?>">Eliminar</a> </td>
                <!-- Button trigger modal -->
                <!-- Modal -->
              </tr>
                        <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="js/funciones.js"></script>
  <script type="js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<script>
includeHTML();
</script>
</html>
