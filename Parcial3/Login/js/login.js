$('document').ready(function () {

    $('#btnaceptar').click(btnIniSesion);
    
    $('#txtpass').keypress(function(e) {
            if (e.keyCode == 13 ) { btnIniSesion(); }
    });

    function btnIniSesion() {
        var vUsuario = $('#txtusuario').val();
        var vPass = $('#txtpass').val();
        if(vUsuario == 'asd' && vPass==1234){
            $.get("./php/login.php", {parUsuario: vUsuario, parPass: vPass}, console.log('Regreso'));
            console.log('credenciales correctas');
            $('#myModal .modal-header').addClass('modal-header-success');
            $('#myModal .modal-header h2').text('Acceso Concedido');
            $('#myModal .modal-body h3').text('Bienvenido');
            $('#myModal').modal();
            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
                });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-success');
                $(location).attr('href',"index.php");
                });
        } 
        else {
            console.log('credenciales invalidas');

            $('#myModal .modal-header').addClass('modal-header-danger');
            $('#myModal .modal-header h2').text('Acceso Denegado');
            $('#myModal .modal-body h3').text('Credeciales incorrectas');
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
            });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-danger');
                $('#inputLogin').focus();
            });

        }
    
}});
