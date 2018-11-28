<?php 
require_once('db.php');
if(isset($_GET['p'])){
	$files = array();
	$allowedext = array('docx','doc','pdf','PDF','DOC','DOCX','pptx','ppt', 'PPT', 'PPTX', 'txt', 'TXT', 'xml', 'XML', 'c', 'C', 'zip', 'tar.gz', 'cap', 'csv', 'netxml', 'jpg', 'jpeg', 'png', 'gif', 'rar', 'RAR', 'l', 'L', 'mp4', 'MP4', 'mkv', 'MKV');
	$next = false;
	$fext = false;
	$succ = false;
	$fail = false;
	$fsiz = false;

	$pth = $_GET['p'];
	$root = $_SERVER['DOCUMENT_ROOT'];
	$uploaddir = "$root$pth/";
	
	foreach($_FILES as $file)
	{
	    $nm = $file['name'];
      $ex = "$uploaddir$nm";
      $sz = $file['size'];
	    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if(!in_array(strtolower($ext), $allowedext) ) {
                 $next = true;
        } 
        
        else if ($file['size'] > 8000000) {
           $fsiz = true;
        }

        else if(file_exists($ex)){
                 $fext = true;
        }
	    
		else if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
    {
        mysqli_query($con, "INSERT INTO fil (file_name, path, type, size, dir_id, user_id) VALUES('$nm', '$ex', '$ext', '$sz', 1, 1)");
		    $succ = true;
		}
		else
		{
		    $fail = true;
		}
		
		
	}
	
	if($next){
	    echo 'Err - File type not allowed';
	} else if($fsiz){
	    echo 'Err - Max Upload File Size < 8MB';
	} else if($fext){
	    echo 'Err - File already exist';
	} else if($succ){
	    echo 'up';
	} else if($fail){
	    echo 'Err - Failed to Upload';
	}
	
} else {
    echo 'Err - Failed to Upload';
}
?>
