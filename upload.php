<!-- <?php




$num_files = count($_FILES['file']['name']);

$formatos = array('.jpg', '.png', '.txt', '.pdf');

$date = date("Y-m-d");

for ($i=0; $i <= $num_files ; $i++) { 
    if (!empty($_FILES['file']['name']['$i'])) {
        $ruta_nueva = "upload/" .$_FILES['file']['name'];
    }
}



    if(isset($_POST['boton'])) {
    $nombrefile = $_FILES['file']['name'];
    $nombreTmpfile = $_FILES['file']['tmp_name'];
    $ext = substr($nombrefile, strrpos($nombrefile, '.'));
    if(in_array($ext, $formatos)){
        if(move_uploaded_file($nombreTmpfile, "upload/$nombrefile")){
            echo "Felicidades, $nombrefile ha subido correctamente, con fecha $date";
        }else{
            echo "Ocurrió un error";
        }
    }else{
        echo "file no permitido";
    }
}  



?>
        
 



