<?php 
require "includes/head.php";
$uploadPath = 'img/'; 
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileType = $_FILES['file']['type'];
$fileError = $_FILES['file']['error'];
$fileSize = $_FILES['file']['size']; 

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

date_default_timezone_set('Asia/Kolkata'); 
$date = date('Y-m-d H:i:s');

$allowedExt = array('jpg','png','jpeg','gif');

if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){ 
    if(in_array($fileActualExt,$allowedExt))
    {
        if($fileError===0)
        { 
            // if($fileSize < 50000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                move_uploaded_file($fileTmpName, $uploadPath.$fileNameNew);
                $path = $uploadPath.$fileNameNew;
            // }
            // else{
            //     echo '<script>alert("File Should be less than 5MB") </script>'; 
            // }
            
        }
        else{
            echo '<script>alert("Error while Uploading Image") </script>'; 
        }
    }
    else
    { 
        echo '<script>alert("Invalid Image Type") </script>'; 
    } 
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $content = $_POST['content'];
    $cat = $_POST['cat'];
    $row = mysqli_fetch_array(mysqli_query($connect,"SELECT MAX(id) FROM writer"));
    $id = $row['MAX(id)']+1;

    $query = "INSERT INTO `writer`(`id`, `heading`, `content`, `date`, `total_like`, `comment`, `writerimg`, `writername`, `category`, `tags`)
                 VALUES ('','$heading','$content','$date','10','comment','$path','name','$cat','$subheading')";
    $query_run = mysqli_query($connect,$query) or die("Something Went Wrong");
    if($query_run) 
    {
        header("Location:edit.php");
        echo '<script>alert("Data Inserted Successfully") </script>'; 
    }
    else{
        echo '<script>alert("Something Went Wrong") </script>'; 
    }

} 
?>