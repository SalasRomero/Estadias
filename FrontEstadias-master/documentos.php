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
          <form>
            <h3>Añadir Documentos</h3>
            <div class="form-group">
              <label for="inputProyecto">Proyecto</label>
              <select class="form-control" name="inputProyecto" id="inputAsesorEmpresa">
                <option value="Proyecto">Proyecto</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputDoc1">Documento 1</label>
              <input type="text" class="form-control" id="inputDoc1" aria-describedby="emailHelp" placeholder="DOC">
            </div>
            <div class="form-group">
              <label for="inputDoc2">Documento 2</label>
              <input type="text" class="form-control" id="inputDoc2" placeholder="DOC">
            </div>
            <div class="form-group">
              <label for="inputDoc3">Documento 3</label>
              <input type="text" class="form-control" id="inputDoc3" placeholder="DOC">
            </div>
            <div class="form-group">
              <label for="inputDoc4">Documento 4</label>
              <input type="text" class="form-control" id="inputDoc4" placeholder="DOC">
            </div>
            <div class="form-group">
              <label for="inputDoc5">Documento 4</label>
              <input type="text" class="form-control" id="inputDoc5" placeholder="DOC">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
        <div class="col-9">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Proyecto</th>
                <th scope="col">Documento 1</th>
                <th scope="col">Documento 2</th>
                <th scope="col">Documento 3</th>
                <th scope="col">Documento 4</th>
                <th scope="col">Documento 5</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Proyecto</th>
                <td>Doc</td>
                <td>Doc</td>
                <td>Doc</td>
                <td>Doc</td>
                <td>Doc</td>
                <!-- <td> <button class="btn btn-warning" type="button" name="btnEditar">Editar</button> <button class="btn btn-danger" type="button" name="btnEliminar" data-toggle="modal" data-target="#exampleModal">Eliminar</button> </td> -->
                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminando Asesor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ¿Estas seguro de querer eliminar [NOMBRE]?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>
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