<?php
/* CBTIS 89
   Programa que saca el IVA del precio de 5 articulos, suma estos resultados y genera un descuento del 10%
   Dylan Arath Gonzalez Renteria
   3roA Programacion Matutino
*/
   $arrayPrecios = array(500,400,200,700,100);
   $arrayIVA = array();
   $arraySubtotal = array();
   $arrayDescuentos = array ();
   $arrayTotal = array ();

   $longitud = count($arrayPrecios);
   for($i=0; $i<$longitud; $i++)
   {$arrayIVA[$i]=$arrayPrecios[$i]*0.16;
   	$arraySubtotal[$i]=$arrayPrecios[$i]+$arrayIVA[$i];
   $arrayDescuentos[$i]=$arraySubtotal[$i]/10;
   $arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
  }
    echo "ARREGLO PRECIOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo $arrayPrecios[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "ARREGLO IVA";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$arrayIVA[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "ARREGLO SUBTOTAL";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$arraySubtotal[$i];
  	echo "<br>";
  }
  echo "<br>";

  echo "ARREGLO DESCUENTOS";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$arrayDescuentos[$i];
  	echo "<br>";
  }
  echo "<br>";
echo "ARREGLO TOTAL";

echo "<br>";

  for($i=0; $i<$longitud; $i++)
  	{echo$arrayTotal[$i];
  	echo "<br>";
  }
?>
