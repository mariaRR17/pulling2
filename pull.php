<?php

  $persona = [
                "nombre" => "Pedro"
                "apellido" => "Sanchez"
                "edad" => 50
            ];
            
            foreach ($persona as $valor){
                  echo "$valor <br>";
            }
           
?>



  $auto = [
                "marca" => "ford"
                "modelo" => "focus"
                "año" => 2017
            ];
            
            foreach ($auto as $posicion => $valor){
                  echo "$posicion: $valor <br>";
            }
           
