<!-- perfil -->
<div class="container">
        <div class="container_titulo">
            <div class="row">
                <div class="col-md-3">
                    <div class="circulo"></div>
                </div>
                <div class="col-md-3">
                    <p>Nombre de usuario:</p><br>
                    <p>Rango:</p>
                </div>
                <div class="col-md-3">
                    <p>Seguidores:0</p>
                    <p style="padding-left: 5px;">Siguiendo:0</p>
                </div>
                <div class="col-md-3">
                    <button type="button" id="eliminarCuentaBtn">Eliminar Cuenta</button>
                    <button type="button" style="margin-left: 5px;"><a href="actualizar_perfil.html"
                            style="text-decoration: none ;color: white;">Editar Perfil</a></button>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>¿Seguro que quieres eliminar la cuenta?</p>
                        <button id="siBtn">Sí</button>
                        <button id="noBtn">No</button>
                    </div>
                </div>
            </div>
            <br><br>

        </div>
        <div class="container_usuario">
            <div class="row">
                <div class="col-md-3">
                    <h5 style="color: white;">Información del usuario</h5>
                </div>
                <div class="col-md-9">
                    <!-- Contenido del contenedor de información del usuario -->
                </div>
            </div>
        </div>
        <div class="container_proyecto">
            <div class="row">
                <div class="col-md-5 d-flex flex-column align-items-start">
                    <div id="columna1" class="kj">
                        <h5 style="color: white; text-align: center;">Datos</h5>
                        <p style="color: white;">Biografia:</p>
                        <p style="color: white;">Correo :</p>
                    </div>

                </div>


                <div class="col-md-7 d-flex flex-column align-items-center">
                    <div id="columna2" class="div">
                        <h5 style="color: white; text-align: center;">Cargar mi proyecto </h5>
                        <textarea class="w-75" style="margin-left: 70px;" cols="15" rows="8"></textarea><br>
                        <button type="button" class="btn btn-primary mt-2" style="margin-left:40%;"><a href="archivos.html" style="text-decoration: none; color:white">Enviar</a></button>
                    </div>

                </div>
            </div>
        </div>

