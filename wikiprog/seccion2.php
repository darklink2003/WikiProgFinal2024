
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Registro</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <input type="checkbox" onclick="togglePasswordVisibility()">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirm_password" placeholder="Confirme su contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }
</script>