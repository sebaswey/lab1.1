$(document).ready(function(){

	$('#calcularH').click(function(){

		if(!parseFloat($('#catetoO').val()) || !parseFloat($('#catetoA').val()))
		{
			alert('ERROR \n\nUn campo no tiene un valor adecuado(Numerico) o esta vacio.\nPor favor limpie los campos y vuelva a ingresar los valores');
		}
		else
		{
			$.ajax({
			 url:"../FrontEnd/paqueteHipotenusa.php",
			 type:'POST',
			 data:$('#hipotenusa').serialize(),
			 success:function(data)
			 {
				$('#resultadoH').html(data);
			 }
		   });
		}
		
	});
});