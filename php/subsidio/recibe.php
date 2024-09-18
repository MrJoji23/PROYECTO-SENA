<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="stylerecibe.css">
</head>
<body>
<div class="formulario">
<?php
$valor;
$valor2;
echo "El nombre empleado es: ";
echo $_REQUEST['nombre'], "<br>";
echo "Su salario es: ", "$";
echo $_REQUEST ['salario'], "<br>";
echo "Sus días trabajdos son: ";
echo $_REQUEST['dias'], "<br>";
if(($_REQUEST['salario']>2600000 && $_REQUEST['dias']==30))
{
    echo "Usted no merece su subsidio","<br>";
    echo "Su salario neto este mes es: ", ($_REQUEST['salario']/30)*$_REQUEST['dias'],"<br>";
}
elseif(($_REQUEST['salario']>2600000 && $_REQUEST['dias']!=30))
{
  echo "Usted no merece su subsidio","<br>";
  echo "Su salario neto este mes es: ", ($_REQUEST['salario']/30)*$_REQUEST['dias'],"<br>";
}
elseif($_REQUEST['salario']<=2600000 && $_REQUEST['dias']<30)
{
    echo "Usted merece su subsio es ", $valor2=(5400* $_REQUEST['dias']),"<br>";
      $valor=($_REQUEST['salario']/30)*$_REQUEST['dias'];
      echo "Su salario neto este mes es: ", ($valor+$valor2);
}
    






?>    
</div>

</body>
</html>



