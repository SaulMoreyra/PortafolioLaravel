$(function(){
    //on dentro de
    //change recarga interna
    $('#select-genero').on('change',metodo_listar);
});

function metodo_listar(){
    //se toma el valor por id
    var genero = document.getElementById('select-genero').value;
    var route = '../ajax/lista_alumnos/'+genero+'';
    $.get(route,function(data){
        var html_select = '<option value="">SELECCIONE...</option>';
        for (var index = 0; index < data.length; index++) {
            html_select += '<option value ="'+data[index].id+'">'+data[index].nombre+'</option>';
            $('#select-genero2').html(html_select);
        }
        console.log(data);
    });
}