<?php
   $numero=$_GET ["numero"];
   $operacion=$_GET ["operacion"];
   $numero2=$_GET ["numero2"];
   $resultado=0;
   if ($operacion == "suma") {
    $resultado= $numero + $numero2;
    echo "$resultado Es el resultado de esta suma";
   }
   else if ($operacion == "resta") {
    $resultado= $numero - $numero2;
    echo "$resultado Es el resultado de esta resta";
   }
   else if ($operacion == "multiplicacion") {
   $resultado= $numero * $numero2;
   echo "$resultado Es el resultado de esta multiplicacion";
   }
   else if ($operacion == "division") {
    if ($numero !=0) {
        $resultado= $numero / $numero2;
        echo "$resultado Es el resultado de esta division";
    }
    else {
        echo "No se puede dividir entre 0";
    }
   }