<?php
  /*================================================================================
  | Clase que calcula :                                                            |
  |                                                                                |
  | *RT(resistencia Total) de tres resistencias en paralelo                        |
  | *Rt de tres resistencias en serie                                              |
  ================================================================================*/

  class Resistencia
  {
  	 function resistenciaParalelo($r1,$r2,$r3,$voltaje)
  	 {
         //variable local
  	 	 $rt=0;
  	 	 $view="";
  	 	 //proceso
  	 	 $rt=1/((1/$r1)+(1/$r2)+(1/$r3));
  	 	 //poner en vista
  	 	 $view="<p>Resistencia Total = $rt OHM<br>
  	 	         Intensidad Resistencia 1 = ".$this->calcularIntensidad($r1,$voltaje)." Amperios<br>
  	 	         Intensidad Resistencia 2 = ".$this->calcularIntensidad($r2,$voltaje)." Amperios<br>
  	 	         Intensidad Resistencia 3 = ".$this->calcularIntensidad($r3,$voltaje)." Amperios<br>
  	 	         Intesidad RT = ".$this->calcularIntensidad($r3,$voltaje)." Amperios</p>";	
  	 	 return $view;
  	 }

  	 function resistenciaSerie($r1,$r2,$r3,$voltaje)
  	 {
  	 	//variables locales
  	 	$rt=0;
  	 	$view="";
  	 	//proceso
  	 	$rt=$r1+$r2+$r3;
  	 	//poner en vista
  	 	$view="<p>Resistencia Total = $rt OHM<br>
  	 	         Intensidad Resistencia 1 = ".$this->calcularIntensidad($r1,$voltaje)." Amperios<br>
  	 	         Intensidad Resistencia 2 = ".$this->calcularIntensidad($r2,$voltaje)." Amperios<br>
  	 	         Intensidad Resistencia 3 = ".$this->calcularIntensidad($r3,$voltaje)." Amperios<br>
  	 	         Intesidad RT = ".$this->calcularIntensidad($rt,$voltaje)." Amperios</p>";	
  	 	 return $view;

  	 }

  	 private function calcularIntensidad($r,$voltaje)
  	 {

  	 	//variable local
      $intensidad=0;
      //proceso
      if($r>0)
      {
         $intensidad=$voltaje/$r;
      }
  	 	

  	 	return $intensidad;
  	 }

  	 function formularioResistencia()
  	 {
  	 	//variable local
  	 	$view="<div id='divResistencia'>
  	 	        
  	 	       <form id='resistencia'>
  	 	       <label> Tipo de Calculo</label>
  	 	        <select name='tipe' id='tipo'>
  	 	         <option value=''></option>
  	 	         <option value='1'>Resistencias en Paralelo</option>
  	 	         <option value='2'>Resistencia en Serie</option>
              </select>

  	 	        <input type='text' name='voltaje' id='voltaje' placeholder='Voltaje'> A
  	 	        <input type='text' name='r1' id='r1' placeholder='Resistencia 1'> OHM
  	 	        <input type='text' name='r2' id='r2' placeholder='Resistencia 2'> OHM
  	 	        <input type='text' name='r3' id='r3' placeholder='Resistencia 3'> OHM 
  	 	       </form>

  	 	       <button id='calculartRT'>Calcular</button>
  	 	       <span id='resultRT'></span>
  	 	       </div>
  	 	       <script type='text/javascript' src='../Action/resistencia.js'></script>";

  	 	return $view;       
  	 }
  }
 

