$(document).ready(function(){

    $('#btnConsultar').click(function(){
        $('#modal1').modal();
        $('#modal1').on('hidden.bs.modal', function(e){
            let varid= $('#idConsulta').val();
            $.post('./PHP/conectar.php',{par1:varid},function(data){
            refrescar(data);
        }, 'json');
    });
});   
    $('#btnEliminar').click(function(){
        $('#modal2').modal();
        $('#modal2').on('hidden.bs.modal', function(e){
            let varid= $('#idEliminar').val();
            $.post('./PHP/eliminar.php',{par1:varid},function(data){
            refrescar(data);
        }, 'json');
    });
}); 
    $('#btnNuevo').click(function(){
    
    let nombre= $('#nombre').val();
    let apellido= $('#apellido').val();
    let correo= $('#correo').val();
    let nac= $('#fecNacimiento').val();
    let genero= $('#genero').val();
    let control= $('#numControl').val();
    let cIns= $('#correoInstitucional').val();
    let telefono= $('#numTelefono').val();

    $.post('./PHP/nuevo.php',{par1:nombre,par2:apellido,par3:correo,par4:nac,par5:genero,par6:control,par7:cIns,par8:telefono},function(data){
    refrescar(data);
    }, 'json');
    
});
$('#btnModificar').click(function(){
    
    let nombre= $('#nombre').val();
    let apellido= $('#apellido').val();
    let correo= $('#correo').val();
    let nac= $('#fecNacimiento').val();
    let genero= $('#genero').val();
    let control= $('#numControl').val();
    let cIns= $('#correoInstitucional').val();
    let telefono= $('#numTelefono').val();

    $.post('./PHP/actualizar.php',{par1:nombre,par2:apellido,par3:correo,par4:nac,par5:genero,par6:control,par7:cIns,par8:telefono},function(data){
    refrescar(data);
    }, 'json');
    
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
    function borrar(objeto){
        $('#nombre')=' ';
        $('#apellido')=' ';
        $('#correo')=' ';
        $('#fecNacimiento').val(objeto.fecha);
        $('#genero').val(objeto.genero);
        $('#numControl').val(objeto.id_usuario);
        $('#correoInstitucional').val(objeto.c_institucional);
        $('#numTelefono').val(objeto.num_telefono);
    }
});