<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="utf-8">
  <title>Estadías | Documentos</title>
</head>
<body>
  <div w3-include-html="includes/navbar.html"></div>

  <div class="section section-main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-primary">Gestión de Documentos</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section bottom-margin">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <form action="php/Insertar_Docs.php" method="POST">
            <h3>Añadir Documentos</h3>
            <div class="form-group">
              <label for="inputProyecto">Proyecto</label>
              <select class="form-control" name="proyecto" id="inputAsesorEmpresa">
              <?php include("conf/db.php");
                $query=" SELECT * From proyecto; ";
                $resultado=mysqli_query($conn,$query);
                while($fila=mysqli_fetch_array($resultado)){
              ?>
                <option value="<?php echo $fila["Id_Proyecto"];?>"><?php echo $fila["NProyecto"];?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc1">Documento 1</label>
              <select class="form-control" name="d1" id="inputAsesorEmpresa" name="doc1">
                <option value="1">Entregado</option>
                <option value="0" selected>Sin Entregar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc2">Documento 2</label>
              <select class="form-control" name="d2" id="inputAsesorEmpresa" name="doc2">
                <option value="1">Entregado</option>
                <option value="0" selected>Sin Entregar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc3">Documento 3</label>
              <select class="form-control" name="d3" id="inputAsesorEmpresa" name="doc3">
                <option value="1">Entregado</option>
                <option value="0" selected>Sin Entregar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc4">Documento 4</label>
              <select class="form-control" name="d4" id="inputAsesorEmpresa" name="doc4">
                <option value="1">Entregado</option>
                <option value="0" selected>Sin Entregar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc5">Documento 4</label>
              <select class="form-control" name="d5" id="inputAsesorEmpresa" name="doc5">
                <option value="1">Entregado</option>
                <option value="0" selected>Sin Entregar</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="Save_Docs">Guardar</button>
          </form>
        </div>
        <div class="col-9">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Proyecto</th>
                <th scope="col">Document 1</th>
                <th scope="col">Document 2</th>
                <th scope="col">Document 3</th>
                <th scope="col">Document 4</th>
                <th scope="col">Document 5</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
                <?php $query="SELECT * FROM documentos";
                  $resultado=mysqli_query($conn,$query);
                  while($fila=mysqli_fetch_array($resultado)){
                ?>
                <tr>
                <th ><?php echo $fila["Id_Proyecto"];?></th>
                <td><?php if($fila["Doc_1"]==1){ echo "Entregado";}else{echo "Sin Entregar";}?></td>
                <td><?php if($fila["Doc_2"]==1){ echo "Entregado";}else{echo "Sin Entregar";}?></td>
                <td><?php if($fila["Doc_3"]==1){ echo "Entregado";}else{echo "Sin Entregar";}?></td>
                <td><?php if($fila["Doc_4"]==1){ echo "Entregado";}else{echo "Sin Entregar";}?></td>
                <td><?php if($fila["Doc_5"]==1){ echo "Entregado";}else{echo "Sin Entregar";}?></td>
                <td><a class="btn btn-warning" href ="php/EditarD_Vista.php?id=<?php echo $fila["Id_Documentos"];?>">Editar</a>
                  <a class="btn btn-danger" href="php/Eliminar_Docs.php?id=<?php echo $fila["Id_Documentos"];?>">Finalizar</a>  </td>
                <!-- <td> <button class="btn btn-warning" type="button" name="btnEditar">Editar</button> <button class="btn btn-danger" type="button" name="btnEliminar" data-toggle="modal" data-target="#exampleModal">Eliminar</button> </td> -->
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