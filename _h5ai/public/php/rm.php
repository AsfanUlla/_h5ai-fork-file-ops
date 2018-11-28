<?php

$err = false;

if(isset($_POST['rm'])){
    
    $del = $_POST['rm'];
    $root = $_SERVER['DOCUMENT_ROOT'];
    
foreach($del as $d){
     $del = "$root$d";
     delete_files($del);
}

}

function delete_files($target) {
    if(is_dir($target)){
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        
        foreach( $files as $file )
        {
            delete_files( $file );      
        }
      
        if(!rmdir( $target )){
            $err = true;
        }
    } elseif(is_file($target)) {
        if(!unlink( $target )){
            $err = true;
        }  
    }
}

  
if($err){
      echo 'err';
  } else {
      echo 'succ';
  }


?>