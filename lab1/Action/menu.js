$(document).ready(function(){

	$('#pitagoras').click(function(){
		$('#titulo').html('Pitagoras');
		$('#contenedor').load('formularioHipotenusa.php');
	});

	$('#resistencia').click(function(){
		$('#titulo').html('Resistencias');
		$('#contenedor').load('formularioResistencia.php');
	});

	$('#ayuda').click(function(){
		$('#titulo').html('Acerca de');
		alert("Version 1.0 \n\nDesarrollado por:\nSebastian Perez\nAlex Arias\nRafael Fuentes\n\nFunlam 2015");
	});

	$('#salir').click(function(){
		$('#titulo').html('Actividad Lab');
		$('#contenedor').html("");
	});
});