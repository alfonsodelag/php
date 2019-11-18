<?php

$num_archivos = count($_FILES['archivo']['name']);
$date = date("d-m-Y");
$extensions = array('jpg', 'txt', 'png', 'pdf'); //

$folder =  "upload/".$date;

//check folder existance. If you put this inside loop, then everytime new folder will be created.
//If you use a variable inside an if or a for loop, then that variable can't be accessed from outside.
if(!file_exists($folder))  
{
    //make new directory with date
    mkdir($folder);
}

for ($i=0; $i < $num_archivos; $i++) { // loop through the files uploaded from form
    //echo "<pre>";
   // print_r($_FILES); exit;
    if(!empty($_FILES['archivo']['name'][$i])){ // check if same file is empty or not
         // "/" means create a folder with no name.
         //  slash(/) is mainly used for making path of a folder or access folder.
        $ruta_nueva = $folder."/".$_FILES['archivo']['name'][$i]; //make target directory
        $explode = explode('.',$_FILES['archivo']['name'][$i]);
        $name_extension = $explode[0];
        $file_extension = $explode[1];
       // echo "<pre>";
       // print_r( $explode[1]); exit;

        if(!in_array($file_extension,$extensions)) //If this $extensions does not match the $file_extension, then the file submitted is not allowed
        {
            echo $file_extension.' extension format not allowed<br>';
        }elseif ($_FILES["archivo"]["size"][$i]> 4194304) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }else if (file_exists($ruta_nueva)) { // chech if file is already exist in our target directory
            echo "El archivo ".$_FILES['archivo']['name'][$i]." ya se encuentra en servidor<br>";
        }else{
            $ruta_temporal = $_FILES["archivo"]["tmp_name"][$i]; //take file
            move_uploaded_file($_FILES["archivo"]["tmp_name"][$i], $ruta_nueva);
            echo "El archivo ".$_FILES['archivo']['name'][$i]." se subió al servidor con fecha $date<br>"; //print success message
        }
        // $num = 0;
        // while (file_exists($ruta_nueva)) {
        //     $new_name = $name_extension.$num;
        //     $num++;
    }
    move_uploaded_file($_FILES["archivo"]["tmp_name"][$i], $ruta_nueva);   
}


?>


 
