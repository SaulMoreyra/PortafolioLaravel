$(function(){
    //on dentro de
    //change recarga interna
    $('#select-semestre').on('change',metodo_listar);
});

function metodo_listar(){
    //se toma el valor por id
    var semestre = document.getElementById('select-semestre').value;
    var route = '../ajax/lista_materias/'+semestre+'';
    $.get(route,function(data){
        var html_select = '<option value="">SELECCIONE...</option>';
        for (var index = 0; index < data.length; index++) {
            html_select += '<option value ="'+data[index].id+'">'+data[index].materia+'</option>';
            $('#select-materia').html(html_select);
        }
    });
}