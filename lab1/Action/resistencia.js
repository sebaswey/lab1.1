$(document).ready(function(){

	$('#calculartRT').click(function(){
		if($('#tipo').val()=="")
		{
			alert('ADVERTENCIA \n\nDebe seleccionar que tipo de calculo de resistencias\nse va a realizar');
			$('#tipo').focus();
		}
        else
		{
			if(!parseFloat($('#r1').val()) || !parseFloat($('#r2').val()) || !parseFloat($('#r3').val()) || !parseFloat($('#voltaje').val()))
			{
               alert('ERROR \n\nUn campo no tiene un valor adecuado(Numerico) o esta vacio.\nPor favor limpie los campos y vuelva a ingresar los valores');
			}
			else
			{
				/*$.ajax({
			      url:'../FrontEnd/paqueteResistencia.php',
			      type:'POST',
			      data:$('#resistencia').serialize(),
			      success:function(data)
			      {
				    $('#resultRT').html(data);
			      }
		        }); */
	        $('#contenedor').load('../FrontEnd/paqueteResistencia.php?r1='+$('#r1').val()+'&r2='+$('#r2').val()+'&r3='+$('#r3').val()+'&v='+$('#voltaje').val()+'&tipo='+$('#tipo').val());  
			}
			
		}
	});
});