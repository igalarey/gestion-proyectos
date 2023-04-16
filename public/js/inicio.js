$(document).ready(function() {
    $(".btn_nuevo_proyecto").click(function() {
        $(".contenido").load("nuevo_proyecto.html");
    });
    $("#menu_nuevo_proyecto").click(function() {
        $(".contenido").load("nuevo_proyecto.html");
    });
    $("#nueva_tarjeta").click(function() {
        $(".contenido2").load("añadir_tareas.html");
    });
});