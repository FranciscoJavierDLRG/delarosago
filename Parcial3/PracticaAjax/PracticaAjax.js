$(document).ready(function(){
    $('#botonAlerta').click(function() {
        $('#ventanaAlerta').show();
    });
    $('#botonCerrarAlerta').click(function(){
        $('#ventanaAlerta').hide();
    });
    $('#botonAjax').click(function(){
        var solicitud = new XMLHttpRequest();          //Crear objeto XMLHttpRequest
        solicitud.onreadystatechange = function() {   // En esta propiedad declaramos la funcion a ejecutar
                                                    // cuando cambie el status del objeto XMLHttpRequest
            if (solicitud.readyState == 4 && solicitud.status == 200) {                 // La respueta esta lista
                document.getElementById("head").innerHTML = solicitud.responseText;  // La propiedad responseText tiene la respuesta en texto  
            }};

        solicitud.open("GET", "header.txt", true);
        solicitud.send(); 
    })
    $('#botonRegreso').click(function(){
        function iniciarHeader() {
        document.getElementById("head").innerHTML = "<h1>Formulario de registro (beca Tamaulipas)</h1>"; 
    
    })
});