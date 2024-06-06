document.addEventListener('DOMContentLoaded', function() {
  fetch('get_courses.php')
      .then(response => response.json())
      .then(data => {
          const cursosContainer = document.getElementById('cursos-container');
          const cursoTemplate = document.getElementById('curso-template').innerHTML;

          data.forEach(curso => {
              // Crear un contenedor temporal para usar el innerHTML
              const tempDiv = document.createElement('div');
              tempDiv.innerHTML = cursoTemplate;

              const cursoDiv = tempDiv.firstElementChild;

              // Reemplazar contenido
              cursoDiv.querySelector('.titulo-curso').textContent = curso.titulo_curso;
              cursoDiv.querySelector('.descripcion-curso').textContent = curso.descripcion;
              cursoDiv.querySelector('.like-button').onclick = () => likeCurso(cursoDiv);
              cursoDiv.querySelector('.dislike-button').onclick = () => dislikeCurso(cursoDiv);
              cursoDiv.querySelector('.ver-lecciones-link').href = `seccion7.php?curso_id=${curso.curso_id}`;

              cursosContainer.appendChild(cursoDiv);
          });
      })
      .catch(error => {
          console.error('Error fetching courses:', error);
      });
});

function likeCurso(element) {
  console.log("Like curso", element);
  // Lógica para manejar el like del curso
}

function dislikeCurso(element) {
  console.log("Dislike curso", element);
  // Lógica para manejar el dislike del curso
}

function cargarLecciones(cursoId) {
  fetch(`get_lessons.php?curso_id=${cursoId}`)
      .then(response => response.json())
      .then(data => {
          const leccionesContainer = document.getElementById('lecciones-container');
          leccionesContainer.innerHTML = ''; // Limpiar el contenedor antes de agregar nuevas lecciones

          data.forEach(leccion => {
              const leccionDiv = document.createElement('div');
              leccionDiv.className = 'leccion';

              const titulo = document.createElement('h2');
              titulo.textContent = leccion.titulo_leccion;

              const contenido = document.createElement('p');
              contenido.textContent = leccion.contenido;

              const fecha = document.createElement('p');
              fecha.textContent = `Fecha: ${leccion.fecha_registro}`;

              leccionDiv.appendChild(titulo);
              leccionDiv.appendChild(contenido);
              leccionDiv.appendChild(fecha);
              leccionesContainer.appendChild(leccionDiv);
          });
      })
      .catch(error => {
          console.error('Error fetching lessons:', error);
      });
}

function agregarLeccion() {
  const leccionesDiv = document.getElementById('lecciones');
  const nuevaLeccion = document.createElement('div');
  nuevaLeccion.className = 'leccion row';
  nuevaLeccion.style.padding = '5px';
  nuevaLeccion.innerHTML = `
      <div class="col-md-3 mx-1" style="background-color:#1a1924; padding:10px; border-radius:10px;">
          <input type="text" name="titulo_leccion[]" placeholder="Título de la lección" style="width: 100%;" required>
          <iframe width="100%" height="200px"
              src="https://www.youtube.com/embed/6V0ApntlAUw?si=1OU6hiIN0_LsPrgy" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <textarea name="contenido_leccion[]" placeholder="Descripción" style="width: 100%;" required></textarea>
          <button type="button" onclick="eliminarLeccion(this)">Eliminar lección</button>
      </div>
  `;
  leccionesDiv.appendChild(nuevaLeccion);
}

function eliminarLeccion(button) {
  const leccion = button.parentElement.parentElement;
  leccion.remove();
}

function eliminarCurso() {
  if (confirm("¿Estás seguro de que deseas eliminar el curso? Esta acción no se puede deshacer.")) {
      // Aquí puedes agregar la lógica para eliminar el curso
  }
}
