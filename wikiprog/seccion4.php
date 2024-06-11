<div class="contenedor_descripcion">
    <form action="guardar_curso.php" method="POST">
        <div class="row" style="height:100px;background-color: #1a1924;">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <input type="text" name="titulo_curso" placeholder="Título del curso" required class="form-control" style="background-color: #1a1924; color: white; border-radius: 10px;">
                <input type="text" name="descripcion" placeholder="Descripción" class="form-control" style="margin-left:10px; background-color: #1a1924; color: white; border-radius: 10px;" required>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <select name="categoria" required class="form-select" style="background-color: #1a1924; color: white; border-radius: 10px;">
                    <?php
                    // Conexión a la base de datos
                    $conexion = new mysqli('localhost', 'root', '', 'wikiprog');
                    if ($conexion->connect_error) {
                        die("Error de conexión: " . $conexion->connect_error);
                    }

                    // Obtener las categorías
                    $sql = "SELECT categoria_id, descripcion FROM categoria";
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<option value="' . $row['categoria_id'] . '">' . $row['descripcion'] . '</option>';
                        }
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>
                <!-- agrega un boton para agregar mas categorias para los cursos -->
                <button type="button" onclick="eliminarCurso()" class="btn btn-danger" style="border-radius: 10px;">Eliminar curso</button>
            </div>
        </div>

        <br>
        <div class="contenedorleccion" style="display: flex; flex-wrap: wrap; background-color:#1a1924; border-radius:10px; padding: 10px;">
            <h3 style="color: white;">Lecciones</h3>
            <div id="lecciones" style="display: flex;">
                <!-- Aquí se agregarán las lecciones -->
            </div><br>
            <button type="button" onclick="agregarLeccion()" class="btn btn-primary" style="margin-top: 10px; border-radius: 10px;">Agregar otra lección</button>
        </div>
                    
        <input type="submit" value="Enviar" class="btn btn-success">
    </form>
</div>
