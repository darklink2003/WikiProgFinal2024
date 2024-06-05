<div id="cursos-container">
    <!-- Los cursos se cargarán aquí -->
</div>

<script type="text/template" id="curso-template">
    <div class="curso">
        <h2 class="titulo-curso"></h2>
        <p class="descripcion-curso"></p>
        <button type="button" class="btn btn-primary" onclick="likeCurso(this)">▲</button>
        <button type="button" class="btn btn-primary" onclick="dislikeCurso(this)" style="margin-left:10px;">▼</button>
        <a href="seccion7.php?curso_id={{curso_id}}" style="text-decoration:none;">
            Ver lecciones
        </a>
    </div>
</script>

<script src="funciones.js"></script>
