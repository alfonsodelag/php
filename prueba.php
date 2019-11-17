<?php


// if(isset($_POST['submit'])){

$file_count = count($_FILES['upload']['name']);

for ($i=0; $i <= $file_count; $i++) {
      $new_path = "upload/".$_FILES['upload']['name'][$i]; 
      if (file_exists($new_path)) {
            move_uploaded_file($tmpfile_name, $new_path );
      }
}      

?>