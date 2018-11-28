<?php
require_once('db.php');
if(isset($_POST['fname'])){

    $dirname = stripslashes($_POST['fname']);
    $dirname = htmlentities($dirname);
    $dirname = preg_replace("/[^a-zA-Z0-9\s]/", "", $dirname);
    
    $path = $_POST['fpath'];
    $root = $_SERVER['DOCUMENT_ROOT'];
    $dir = "$root$path/$dirname/";
    

if(file_exists($dir)){
       echo '1';
}
else if(mkdir($dir)){
    mysqli_query($con, "INSERT INTO dir (dir_name, pth, user_id) VALUES ('$dirname', '$dir', 1)");
     echo '2';
} else {
    echo '3';
}

    
    
}


?>
