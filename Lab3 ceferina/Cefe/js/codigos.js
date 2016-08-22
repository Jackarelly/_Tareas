
	$('#contacto').on('click', function()
	{
		alert("Has presionado el boton contato");
	})

//  -----  OTRA MANERA DE HACERLO FUNCIONAR   ----  

/*
	document.getElementById('publicar').onclick = function()
	{
		alert("hola");
	}
*/


	$('#publicar').on('click', function()
	{
		$('#form').toggleClass('mostrarform');
			alert("formulario aparecio; para ocultarlo presione el boton publicar una vez mas ");
			$('#form').toggleClass('formulario');

			$('#art1').toggleClass('ocultarart1');
			$('#art1').toggleClass('art1');
			$('#art2').toggleClass('moverart2');
			$('#art2').toggleClass('art2');


	})

//  -----  OTRA MANERA DE HACERLO FUNCIONAR   ----  

/*
	document.getElementById('contacto').onclick = function()
	{
		$('#form').toggleClass('mostrarform');
			//alert("formulario aparecio en la parte de abajo");
			$('#form').toggleClass('formulario');

			$('#art1').toggleClass('ocultarart1');
			$('#art1').toggleClass('art1');
			$('#art2').toggleClass('moverart2');
			$('#art2').toggleClass('art2');
	}
*/
	

	$('#inicio').on('click', function()
	{
		alert("Bienvenido a mi tarea");
	})