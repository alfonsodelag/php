<?php

echo  $_POST["name"]; 
echo "<br>";

echo  $_POST["email"]; 
echo "<br>";

echo  $_GET["name"]; 
echo "<br>";

echo  $_GET["email"]; 
echo "<br>";



$num_archivos = count($_FILES['archivo']['name']);
echo $num_archivos;

for ($i=0; $i <=$num_archivos; $i++) { 
    if(!empty($_FILES['archivo']['name'][$i])) {
        $ruta_nueva = "stuff" . $_FILES['archivo']['name'][$i];
        if(file_exists($ruta_nueva)) {
            echo "el archivo ".$_FILES['archivo']['tmp_name'][$i]." ya se encuentra en el servidor<br>";  
        }else{
            $ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
            move_uploaded_file($ruta_temporal, $ruta_nueva);
            echo "el archivo ".$_FILES['archivo']['tmp_name'][$i]." ya se encuentra en el servidor<br>";   

        }
    }
}


echo "El archivo es";

?>