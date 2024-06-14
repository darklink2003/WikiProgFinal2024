
<div id="lecciones-container">
    <!-- Las lecciones se cargarán aquí -->

</div>
<div class="comentarios-container">
        <input type="text" name="" id="">
    </div>
<script src="js/funciones.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const cursoId = urlParams.get('curso_id') || 1; // Usar 23 como valor predeterminado si no se proporciona curso_id
        cargarLecciones(cursoId);
    });
</script>