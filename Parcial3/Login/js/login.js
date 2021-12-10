$('document').ready(function () {

    $('#btnaceptar').click(btnIniSesion);
    
    $('#txtpass').keypress(function(e) {
            if (e.keyCode == 13 ) { btnIniSesion(); }
    });
    function btnIniSesion() {
        var vUsuario = $('#txtusuario').val();
        var vPass = $('#txtpass').val();
        console.log(vUsuario+" "+vPass);
        $.post("./php/login.php", {parUsuario: vUsuario,parPass: vPass}, function(ret){

        console.log(ret);
        if (ret['resultado'] != 0) {
            console.log('login incorrecto');
        }
        else {
        console.log('login correcto');
        console.log(ret);
        $(location).attr('href',"index.php");
        }
    },'json');

}});
