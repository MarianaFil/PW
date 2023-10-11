<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar
    $dato2=$_POST["txtapellido"];
    


    if ($dato1=="Mariana" ){
        echo "<h1>Hola Mariana, bienvenida " . $dato1;
        echo " ";
        echo '<a href="Formulario.php"> aquí </a>';

    }else {
        echo "eres alguien diferente";
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';
        
    }

   

        
?>