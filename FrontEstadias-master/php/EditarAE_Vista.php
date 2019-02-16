<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Asesor</title>
</head>
<body>
    <?php include("../conf/db.php")?>
    <div class="container">
      <div class="row">
        <div class="col-6">

          <form action="Editar_Asesor.php" method="POST">
            <h3>Añadir Asesor Empresarial</h3>
            <div class="form-group">
              <input type="text" class="form-control invisible " id="inputNombreAsesor" value="<?php echo $_GET["id"]?>" name="id" aria-describedby="emailHelp" placeholder="Nombre del Asesor">
            </div>
            <?php
                $id=$_GET["id"];
                $queryform="SELECT * FROM acesor_empresarial WHERE Id_AEmpresarial='$id';";
                $resultadoform=mysqli_query($conn,$queryform); 
                $empre='';
                    while($filaform=mysqli_fetch_array($resultadoform)){
                        $empre=$filaform["Id_Empresa"];
                ?>
            <div class="form-group">
              <label for="inputNombreAsesor">Nombre</label>
              <input type="text" class="form-control" id="inputNombreAsesor" value="<?php echo $filaform["Nombre"];?>" name="nombre" aria-describedby="emailHelp" placeholder="Nombre del Asesor">
            </div>
            <div class="form-group">
              <label for="inputTelefonoAsesor">Teléfono</label>
              <input type="phone" class="form-control" id="inputTelefonoAsesor" value="<?php echo $filaform["Telefono"];?>" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <label for="inputAsesorCorreo">Email</label>
              <input type="email" class="form-control" id="inputAsesorCorreo" value="<?php echo $filaform["Correo"];?>"  name="email" placeholder="Email">
            </div>
                <?php } ?>
            <div class="form-group">
              <label for="inputAsesorEmpresa">Empresa</label>
              <select class="form-control" name="AsesorEmpresa" id="inputAsesorEmpresa">
                <?php $query= "SELECT Id_Empresa, Nombre FROM empresa;"; 
                        $resultado=mysqli_query($conn,$query);
    
                    while($fila=mysqli_fetch_array($resultado)){
                        if($fila["Id_Empresa"]===$empre){
                ?>
                <option value="<?php echo $fila["Id_Empresa"];?>" selected><?php echo $fila["Nombre"];?></option>
                <!--<option value="Empresa2">Empresa2</option>-->
                    <?php } else{?>
                        <option value="<?php echo $fila["Id_Empresa"];?>" ><?php echo $fila["Nombre"];?></option>
                    <?php 
                }} ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="Update_Asesor"  >Editar</button>
            <button type="submit" class="btn btn-danger" name="Cancelar"  >Cancelar</button>
          </form>
                    </div>    

          <script src="js/funciones.js"></script>
  <script type="../js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>