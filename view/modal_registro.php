<!-- Modal -->
<div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formulario_registro">
          <div class="form-group">
            <label for="regis_usuario">Usuario</label>
            <input  class="form-control" id="regis_usuario" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="regis_password">Password</label>
            <input type="password" class="form-control" id="regis_password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="registro()" data-dismiss="modal">Registrarse</button>
      </div>
    </div>
  </div>
</div>