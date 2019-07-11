$(function(){
    $('#select-id').on('change',metodo_listar);
});

function metodo_listar(){
    //se toma el valor por id
    let selected = document.getElementById('select-id')

    var id = selected.value;
    /*
    var index = selected.selectedIndex;
    var options = selected.options;
    console.log(options[index].innerHTML);
    */
    
    var route = '../ajax/producto/'+id+'';

    //console.log(route);
    $.get(route,function(data){
        //console.log(data);
        for(var i=0; i<data.length; i++){
            
            var tipo = '<option value ="'+data[i].tipo+'">'+data[i].tipo+'</option>';;
            $('#select-tipo').html(tipo);
            
            var proveedor = '<option value ="'+data[i].proveedor+'">'+data[i].proveedor+'</option>';;
            $('#select-proveedor').html(proveedor);

            var precio_u = '<option value ="'+data[i].precio_u+'">'+data[i].precio_u+'</option>';;
            $('#select-preciou').html(precio_u);

            var precio_v = '<option value ="'+data[i].precio_v+'">'+data[i].precio_v+'</option>';;
            $('#select-preciov').html(precio_v);
        }
    });
}


/*
$(function () {

    $('#select-producto').on('change', metodo_listar);
 
 });S
    function metodo_listar(){
        var idpro = document.getElementById("select-producto").value;
     
        $.get('../lista_productos_full',function (data){
            var buscado = buscar(data,idpro);
            var select_tipo = '<option value='+data[buscado].id+'>'+data[buscado].tipo+'</option>';
            var select_preciov = '<option value='+data[buscado].id+'>'+data[buscado].precio_unitario+'</option>';
            var html_select =  '<option value='+data[buscado].id+'>'+data[buscado].precio_venta+'</option>';
            for (var i = 0; i < data.length; i++){
                if(i != buscado){
                    select_tipo += '<option value='+data[i].id+'>'+data[i].tipo+'</option>';
                    html_select += '<option value='+data[i].id+'>'+data[i].precio_unitario+'</option>';
                    select_preciov += '<option value='+data[i].id+'>'+data[i].precio_venta+'</option>';
                }
            }
            $('#select-tipo').html(select_tipo);
            $('#select-preciou').html(html_select);
            $('#select-preciov').html(select_preciov);    
        });
        }
    
        function buscar(data, id){
            for (let index = 0; index < data.length; index++) {
                if(data[index].id == id){
                    return index;
                }            
            }
        }
*/