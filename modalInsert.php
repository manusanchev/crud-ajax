  <!-- Modal insert -->
  <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Añadir alumno</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="validar.php" method="POST">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Nombre:</label>
                          <input type="text" class="form-control" name="nombre" id="nombre">
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Asignatura:</label>
                          <input type="text" class="form-control" name="asigntura" id="asignatura">
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Nota:</label>
                          <input type="number" class="form-control" min="0" max="10" name="nota" step='0.1' id="nota">
                      </div>

              </div>
              <div class="modal-footer">
                  <input type="button"  id="registrar"class="btn btn-primary" data-dismiss="modal"
                      value="Insertar">
              </div>
              </form>
          </div>
      </div>
  </div>