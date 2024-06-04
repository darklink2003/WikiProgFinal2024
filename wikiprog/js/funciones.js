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
document.addEventListener('DOMContentLoaded', function() {
  fetch('get_courses.php')
      .then(response => response.json())
      .then(data => {
          const cursosContainer = document.getElementById('cursos-container');
          data.forEach(curso => {
              const cursoDiv = document.createElement('div');
              cursoDiv.className = 'curso';
              
              const titulo = document.createElement('h2');
              titulo.textContent = curso.titulo_curso;
              
              const descripcion = document.createElement('p');
              descripcion.textContent = curso.descripcion;
              
              cursoDiv.appendChild(titulo);
              cursoDiv.appendChild(descripcion);
              cursosContainer.appendChild(cursoDiv);
          });
      })
      .catch(error => {
          console.error('Error fetching courses:', error);
      });
});
document.addEventListener('DOMContentLoaded', function() {
  fetch('get_lessons.php')
    .then(response => response.json())
    .then(data => {
      const leccionesContainer = document.getElementById('leccion-container');
      data.forEach(leccion => {
        const leccionDiv = document.createElement('div');
        leccionDiv.className = 'leccion';

        const titulo = document.createElement('h2');
        titulo.textContent = leccion.titulo_leccion;

        const contenido = document.createElement('p');
        contenido.textContent = leccion.contenido;

        leccionDiv.appendChild(titulo);
        leccionDiv.appendChild(contenido);
        leccionesContainer.appendChild(leccionDiv);
      });
    })
    .catch(error => {
      console.error('Error fetching lessons:', error);
    });
});