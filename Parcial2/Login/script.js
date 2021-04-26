$(document).ready(function(){
    $("#login").hide();
    $("#Login_desplegable").click(function(){
        $("#login").slideToggle();
    })
    $("#Enviar").click(function() {
        if(document.getElementById("usuario").value==usuario){
            if(document.getElementById("password").value==contraseña){
                alert('Contraseña correcta! :D');
            }
            else{
                alert("Contraseña incorrecta! :c");
            }
        }
        else{
            alert("Contraseña incorrecta! :c");
        }
    });
})
usuario = "a";
contraseña = "1";
