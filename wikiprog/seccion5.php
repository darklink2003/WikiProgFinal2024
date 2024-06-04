<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Formulario de Registro</h3>
                    </div>
                    <div class="card-body">
                        <form action="guardar.php" method="post">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>