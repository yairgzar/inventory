console.log("el uso de JS esta en funcionamiento");
function selectData(respuesta){
    let datosTabla = [];
    const obj = {
        accion: 'select_Users'
    }
 if(respuesta){
    obj['ordenar'] = respuesta;
        }
        
    $.post('../../includes/_functions.php', obj, function(response){
       let html = ``;

       response.map(function(i){
                            if (i.cantidad <= i.cantidad_min){
                                var color = 'colorout';
                            } else{
                                color = '#fffff';
                            }


                datosTabla = i;
                /*   console.log(datosTabla) */

           html += `    <tr> 
                        <td class="${datosTabla.categorias}">${datosTabla.id}</td>
                        <td>${datosTabla.nombre}</td>
                        <td>${datosTabla.marca}</td>
                        <td>${datosTabla.color}</td>
                        <td>${datosTabla.material}$</td>
                        <td>${datosTabla.serie}$</td>
                        <td>${datosTabla.estado}$</td>
                        <td>${datosTabla.usuario_responsable}</td>
                        <td>${datosTabla.no_etiqueta}</td>
                        <td>${datosTabla.categorias}</td>
                        <td>
                        <a  href="#" data-id="${datosTabla.id}" class="editar">
                        <div">
                        Editar
                        </div>
                        </a>
                        <a>|</a>
                        <a href="#" data-id="${datosTabla.id}" class="eliminar">
                        <div">
                        Eliminar
                        </div>
                        </a>
                        </td>
                        </tr>`
       })
       $("#table-data tbody").html(html);
    }, 'JSON');

}
$(document).ready(function(){
    selectData()

$("#btnSubmit").click(function () {
     
        let obj = {
            accion: 'insertar_productos'
        }

        let state = 0;
       $("#Form")
       .find('input,select')
       .map(function(){
           if($(this).val() == ''){
                $(this).addClass('errores');
                state = 1;
                return false;
           }
           obj[$(this).prop('name')]  = $(this).val() 
       })
       if(state == 1){
           alert("faltan campos por llenar");
           return false;
       }
       
       
       if($(this).data('editar'))
       {
           obj['accion'] = 'editar_producto'
           obj['id'] = $(this).data('editar')
       }

       console.log(obj);
$.post('../../includes/_functions.php', obj, function (response) {
   if(response.type == "success"){
       toggleForm($("#showform"))
       
   }
   selectData();
   alert(response.tittle + response.text)
       },'JSON');
})
$("#Form").find('input').keyup(function(){
        $(this).removeClass('errores')
})
//B
 $('#table-data').on('click', '.editar', function(e){
e.preventDefault()
const id = $(this).data('id')
const confirmacion = confirm('¿Desea editar el registro?')
$('#showform').trigger('click')
$('#btnSubmit').text('editar').data('editar', id)

let formularioDatos = new FormData()
formularioDatos.append('accion', 'editar_tabla')
formularioDatos.append('id', id)
if(confirmacion){
    fetch('../../includes/_functions.php', {
        method: 'POST',
        body: formularioDatos
})
.then((res) => res.json())
.then((response) => {
    $('#nombre').val(response.nombre);
    $('#marca').val(response.marca);
    $('#color').val(response.color);
    $('#material').val(response.material);
    $('#serie').val(response.serie);
    $('#estado').val(response.estado);
    $('#usuario_responsable').val(response.usuario_responsable);
    $('#no_etiqueta').val(response.no_etiqueta);
    $('#categorias').val(response.categorias);
    console.log(response)})
}
})
//C
$('#table-data').on('click', '.eliminar', function(e){
    e.preventDefault()
    const id = $(this).data('id')
  
   const confirmacion = confirm('¿Desea eliminar el registro?')

   let formularioDatos = new FormData()
   formularioDatos.append('accion', 'eliminar_producto')
   formularioDatos.append('id', id)

   if (confirmacion) {
      fetch('../../includes/_functions.php', {
      method: 'POST',
      body: formularioDatos
      
   }) 
   .then((res) => res.json())
   .then((response) => {alert(`${response.tittle}:${response.text}`)
})
   
} 
selectData()  
})
//d
$('#btnBuscar').click(function() {
    const seleccion = $('#ordenar').val()
    selectData(seleccion);
})
})
