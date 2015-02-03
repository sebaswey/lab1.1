<?php
   include_once('C:\AppServ\www\ingenieriaSoftware\lab1\BackEnd/Resistencia.php');

   $resistencia=new Resistencia();
    
   if($_GET['tipo']==1)
   {
   	 echo $resistencia->resistenciaParalelo($_GET['r1'],$_GET['r2'],$_GET['r3'],$_GET['v']);
   }
   else if($_GET['tipo']==2)
   {
   	  echo $resistencia->resistenciaSerie($_GET['r1'],$_GET['r2'],$_GET['r3'],$_GET['v']);
   }
?>   

   


   