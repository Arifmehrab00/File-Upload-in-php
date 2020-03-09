<?php 
//print_r($_FILES);
if(isset($_POST['submit'])){
$fileName    = $_FILES['profile']['name'];
$fileTmpName = $_FILES['profile']['tmp_name'];
$fileSize    = $_FILES['profile']['size'];

// File Extension //
$fileExtension = explode('.', $fileName); // File Ar Last Value Count Korva //
$fileExtension = strtolower(end($fileExtension)); // Always Last Value Count Korva //
$uploadeFile   = "image/".rand(0000,999999).".".$fileExtension;

// validation Size //
if($fileSize <= 1000000){
     if($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png'){
        if(move_uploaded_file($fileTmpName, $uploadeFile)){
            echo "uploaded";
        }else{
        	echo "SomeThing Went Wrong";
        }
     }else{
     	echo "Please Upload jpg/png/jpeg";
     }
}else{
	echo "Upload Max size 2MB";
}

}