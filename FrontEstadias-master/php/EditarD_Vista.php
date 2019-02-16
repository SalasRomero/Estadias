<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Editar Documento</title>
</head>
<body>
    <div class="container">
<div class="col-6">

          <form action="Editar_Doc.php" method="POST">
            <h3>Añadir Documentos</h3>
            <input type="text" class="invisible" name ="id" value="<?php echo $_GET["id"];?>">
            <?php include("../conf/db.php");
                $idd=$_GET["id"];
                $query="SELECT * FROM documentos WHERE Id_Documentos='$idd'";
                 $resultado=mysqli_query($conn,$query);
                    while($fila=mysqli_fetch_array($resultado)){
             ?>
            <div class="form-group">
              <label for="inputDoc1">Documento 1</label>
              <select class="form-control" name="d1" id="inputAsesorEmpresa" name="doc1">
              <?php if($fila["Doc_1"]==1){ ?>
              <option value="1" selected >Entregado</option>
                <option value="0" >Sin Entregar</option>
              <?php } else{?>
                <option value="1" >Entregado</option>
                <option value="0" selected >Sin Entregar</option>
              <?php } ?>
                </select>
            </div>
            <div class="form-group">
              <label for="inputDoc2">Documento 2</label>
              <select class="form-control" name="d2" id="inputAsesorEmpresa" name="doc2">
              <?php if($fila["Doc_2"]==1){ ?>
              <option value="1" selected >Entregado</option>
                <option value="0" >Sin Entregar</option>
              <?php } else{?>
                <option value="1" >Entregado</option>
                <option value="0" selected >Sin Entregar</option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc3">Documento 3</label>
              <select class="form-control" name="d3" id="inputAsesorEmpresa" name="doc3">
              <?php if($fila["Doc_3"]==1){ ?>
              <option value="1" selected >Entregado</option>
                <option value="0" >Sin Entregar</option>
              <?php } else{?>
                <option value="1" >Entregado</option>
                <option value="0" selected >Sin Entregar</option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc4">Documento 4</label>
              <select class="form-control" name="d4" id="inputAsesorEmpresa" name="doc4">
              <?php if($fila["Doc_4"]==1){ ?>
              <option value="1" selected >Entregado</option>
                <option value="0" >Sin Entregar</option>
              <?php } else{?>
                <option value="1" >Entregado</option>
                <option value="0" selected >Sin Entregar</option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc5">Documento 4</label>
              <select class="form-control" name="d5" id="inputAsesorEmpresa" name="doc5">
              <?php if($fila["Doc_5"]==1){ ?>
              <option value="1" selected >Entregado</option>
                <option value="0" >Sin Entregar</option>
              <?php } else{?>
                <option value="1" >Entregado</option>
                <option value="0" selected >Sin Entregar</option>
              <?php } ?>
              </select>
            </div>
                    <?php } ?>
            <button type="submit" class="btn btn-primary" name="Update_Docs">Actualizar</button>
            <button type="submit" class="btn btn-danger" name="Cancelar">Cancelar</button>
          </form>
        </div>
        </div>
        <script src="../js/funciones.js"></script>
  <script type="../js/bootstrap.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>