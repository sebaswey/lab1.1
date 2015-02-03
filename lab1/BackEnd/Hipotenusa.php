<?php
 /*=================================================================================
 | Clase que calcula la hipotenusa de un triangulo Rectangulo                      |
 |                                                                                 |
 |================================================================================*/

 class Hipotenusa
 {
 	function calcularHipotenusa($cateto1,$cateto2)
 	{
 		return "<p>Hipotenusa = ".sqrt(pow($cateto1,2)+pow($cateto2,2))."</p>";
 	}

 	function formularioHipotenusa()
 	{
 		//variables locales
 		$view="<div id='divHipotenusa'>
 		        <form id='hipotenusa'>
 		         <input type='text' name='catetoO' id='catetoO' placeholder='Cateto Opuesto'>
 		         <img src='../recursos/triangulo.jpg'>
 		         <input type='text' name='catetoA' id='catetoA' placeholder='Cateto Adyacente'>
 		        </form>
 		       <button id='calcularH'>Calcular</button> 

 		       <span id='resultadoH'></span>
 		       </div>
 		       <script type='text/javascript' src='../Action/hipotenusa.js'></script>";
              
 		return $view;       
 	}
 }
