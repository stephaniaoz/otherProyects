$(document).ready(function(){

	$( "button" ).click(function() {

	  var opcion = $(this).attr("name");

		if(opcion == 'update'){

			var idUsu = $(this).attr('id');
			var numFila = $(this).attr('class');

			//alert(numFila);

			$('button[ name = actualizar]').attr('id',idUsu);


			var nombre = $('.nombre'+numFila).attr('id');
			var email = $('.email'+numFila).attr('id');
			var sexo = $('.sexo'+numFila).attr('id');
			var area = $('.area'+numFila).attr('id');
			var boletin = $('.boletin'+numFila).attr('id');
			var descripcion = $('.descripcion'+numFila).attr('id');

			$('input[name = nombre]').val(nombre);
			$('input[name = email]').val(email);

			$('input[name = tipo_sexo]').each(function(e){

				if($(this).val() == sexo){

					$(this).prop('checked',true);
				}

			});

			$('select[name=selecArea] option').each(function(e){

				if($(this).val()== area){

					$(this).attr('selected',true);
				}

			});


			if( boletin == 1){

				$('input[name=tipo_boletin]').prop('checked',true);

			}else{

				$('input[name=tipo_boletin]').prop('checked',false);
			}




			$('textarea[name = descripcion]').val(descripcion);
			$('button[ name = actualizar]').show();
			$('.Ventana').slideDown('slow');

		}

		if(opcion == 'actualizar'){

			var nombre = $('input[name = nombre]').val();
			var email = $('input[name = email]').val();
			var tipo_sexo = "";
			var selecArea = "";
			var tipo_boletin = "";
			var descripcion = $('textarea[name = descripcion]').val();
			var modulo = 'actualizar';
			var idUsu = $(this).attr('id');

			$('input[name = tipo_sexo]').each(function(e){

				if($(this).is(':checked')){

					tipo_sexo = $(this).val();
				}

			});

			$('select[name=selecArea] option').each(function(e){

				if($(this).is(':selected')){

					selecArea = $(this).val();
				}

			});

			if($('input[name=tipo_boletin]').is(':checked')){

					tipo_boletin = $('input[name=tipo_boletin]').val();

			}else{

				tipo_boletin = "0";
			}



			$.ajax({

				type:"POST",
				url:"Controller/TbUsuarioController.php",
				data:{
					"idUsu": idUsu,
					"nombre": nombre,
					"email": email,
					"tipo_sexo": tipo_sexo,
					"selecArea": selecArea,
					"tipo_boletin": tipo_boletin,
					"descripcion": descripcion,
					"modulo": modulo

				},

				success:function(data){

					alert(data);
					location.reload();
				},

				error:function(jqHXR,textStatus,errorThrown){

					console.log("Error: "+errorThrown);
				}

			});


		}



		if(opcion == 'Crear'){

			$('button[ name = guardar]').show();
			$('.Ventana').slideDown('slow');
		}

		if(opcion == 'guardar'){

			var nombre = $('input[name = nombre]').val();
			var email = $('input[name = email]').val();
			var tipo_sexo = $('input[name = tipo_sexo]').val();
			var selecArea = $('select[name=selecArea] option').val();
			var tipo_boletin;
			var descripcion = $('textarea[name = descripcion]').val();
			var rol;
			var modulo = "guardar";

			$('input[name = tipo_rol]').each(function(e){

				if($(this).is(':checked')){

					rol = $(this).val();
				}

			});


			if($('input[name=tipo_boletin]').is(':checked')){

					tipo_boletin = $('input[name=tipo_boletin]').val();
			}else{

				tipo_boletin = 0;
			}

			$.ajax({

				type:"POST",
				url:"Controller/TbUsuarioController.php",
				data:{

					"nombre": nombre,
					"email": email,
					"tipo_sexo": tipo_sexo,
					"selecArea": selecArea,
					"tipo_boletin": tipo_boletin,
					"descripcion": descripcion,
					"rol" : rol,
					"modulo": modulo

				},

				success:function(data){

					alert(data);
					location.reload();
				},

				error:function(jqHXR,textStatus,errorThrown){

					console.log("Error: "+errorThrown);
				}

			});

		}


		if(opcion == 'delete'){

			var idUsu = $(this).attr('id');
			var modulo = "eliminar";

			$.ajax({

				type:"POST",
				url:"Controller/TbUsuarioController.php",
				data:{

					"idUsu" : idUsu,
					"modulo":modulo

				},

				success:function(data){

					alert(data);
					location.reload();
				},

				error:function(jqHXR,textStatus,errorThrown){

					console.log("Error: "+errorThrown);
				}

			});

		}
	});

});