$(document).ready(function(){

    $('#btnConsultar').click(function(){

        $('#modal1').modal();
        $('#modal1').on('hidden.bs.modal', function(e){
            let varid= $('#idConsulta').val();
            $.post('./PHP/conectar.php',{par1:varid},function(data){
            refrescar(data);
        }, 'json');
        })
    });
    function refrescar(objeto){
        $('#nombre').val(objeto.nombre);
        $('#apellido').val(objeto.apellido);
        $('#correo').val(objeto.correo);
        $('#fecNacimiento').val(objeto.fecha);
        $('#genero').val(objeto.genero);
        $('#numControl').val(objeto.id_usuario);
        $('#correoInstitucional').val(objeto.c_institucional);
        $('#numTelefono').val(objeto.num_telefono);
    }
});