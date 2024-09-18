<?php


$valor;
$valor2;
echo "El nombre empleado es: ";
echo $_REQUEST['nombre'], "<br>";
echo "Su salario es: ", "$";
echo $_REQUEST ['salario'], "<br>";
echo "Sus días trabajdos son: ";
echo $_REQUEST['dias'], "<br>";



if ($_REQUEST ['salario']>=2600000){
echo "Usted no merece su subsidio";
}
else{
     $valor=5400*$_REQUEST['dias'];
      echo "Su subsidio de transporte es de ", "$", $valor, "<br>";
}
if ($_REQUEST['dias']===30){
      echo "Su sueldo es de", "$", $_REQUEST['salario'];
}
else{
 $valor2=($_REQUEST['salario']/30) * $_REQUEST['dias'];
 echo "Su salario neto ", "$",$valor2, "<br>";
}
echo "Su totalidad de este mes es: ", "$" ,($valor + $valor2);

?>    