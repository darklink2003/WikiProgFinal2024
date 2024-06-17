<div class="container">
        <h1>Lecciones del Curso</h1>
        <div id="lecciones-container">
            <!-- Aquí se cargarán las lecciones -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const cursoId = urlParams.get('curso_id') || 1; // Usar 1 como valor predeterminado si no se proporciona curso_id

            // Función para cargar las lecciones del curso
            function cargarLecciones(cursoId) {
                axios.get(`get_lessons.php?curso_id=${cursoId}`)
                    .then(function (response) {
                        const leccionesContainer = document.getElementById('lecciones-container');
                        leccionesContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas lecciones

                        response.data.forEach(function (leccion) {
                            const leccionDiv = document.createElement('div');
                            leccionDiv.className = 'leccion';

                            const titulo = document.createElement('h2');
                            titulo.textContent = leccion.titulo_leccion;

                            const contenido = document.createElement('p');
                            contenido.textContent = leccion.contenido;

                            leccionDiv.appendChild(titulo);
                            leccionDiv.appendChild(contenido);

                            // Agregar enlace al archivo si está disponible
                            if (leccion.archivo_leccion) {
                                const enlaceArchivo = document.createElement('a');
                                enlaceArchivo.textContent = 'Descargar archivo';
                                enlaceArchivo.href = leccion.archivo_leccion;
                                enlaceArchivo.setAttribute('target', '_blank'); // Abrir en una nueva pestaña
                                enlaceArchivo.style.display = 'block'; // Mostrar en un nuevo bloque
                                leccionDiv.appendChild(enlaceArchivo);
                            }

                            leccionesContainer.appendChild(leccionDiv);
                        });
                    })
                    .catch(function (error) {
                        console.error('Error al cargar las lecciones:', error);
                    });
            }

            // Cargar las lecciones al cargar la página
            cargarLecciones(cursoId);
        });
    </script>