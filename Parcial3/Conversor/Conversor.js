$(document).ready(function () {

    $("#botonAjax").click(presionBoton);


    function presionBoton() {
        var parnum = $("#num").val();

        $.get("Conversor.php", {num:parnum}, llegadaDatos);
        //return false;
    }

    function llegadaDatos(datos) {
        $('#resultado').html('<h3>La temperatura en centigrados es: ' + datos + '</h3>');
    }

});
