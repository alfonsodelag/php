<?php



for ($i=0; $i < $file_count ; $i++) {
    

      $file_name = $_FILES['upload']['name'][$i];
      $file_tmp = $_FILES['upload']['tmp_name'][$i];
      $file_type = $_FILES['upload']['type'][$i];
      $file_size = $_FILES['upload']['size'][$i];
      $file_format = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
      $format_file = array(".jpg",".png",".txt",".pdf");
      $date_file = date("d-m-Y"."/");
      $file_storage = "files/".$date_file;
      $file_info = pathinfo($file_storage.$file_name);
      $new_name = $file_info['filename']."_0".$num.".".$file_format;


print_r($file_size);