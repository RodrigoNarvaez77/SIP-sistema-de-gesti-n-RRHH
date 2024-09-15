$(document).ready(function(){
	$(".btn_guardar").on('click',function(e){
		e.preventDefault();
		
		tabla = $(this).closest('tr');

		var celda = new Object();

		celda.id = $(this).attr('rel');
		celda.referido = tabla.find('.referido').val();
		celda.contacto = tabla.find('.contacto').val();
		celda.disponibilidad = tabla.find('.disponibilidad').val();
		celda.contrato = tabla.find('.contrato').val();
		celda.status = tabla.find('.status').val();

		var json = JSON.stringify(celda);
        var posting = $.post( base_url + "est/requerimiento/editar_usuarios_req",{json : json});
 
        // Put the results in a div
        posting.done(function( data ) {
            //alert(data);
            toastr.success("Dato actualizado con exito!")
        });

		//alert( tabla.find('.referido').val() );
	});
});