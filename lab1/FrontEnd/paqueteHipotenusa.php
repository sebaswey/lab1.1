<?php
 include_once('C:\AppServ\www\ingenieriaSoftware\lab1\BackEnd/Hipotenusa.php');
  $hipotenusa=new Hipotenusa();

  echo $hipotenusa->calcularHipotenusa($_POST['catetoO'],$_POST['catetoA']);
  
 ?> 