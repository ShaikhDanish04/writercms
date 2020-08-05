
<?php 
require "includes/head.php";
$id = $_GET['id'];
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
$path = '';
if(isset($_POST['submit']) || !empty($_FILES['file']['name'])){ 
    if(in_array($fileActualExt,$allowedExt))
    {
        if($fileError===0)
        { 
            // if($fileSize < 50000){
                // $fileNameNew = uniqid('',true).".".$fileActualExt;
                move_uploaded_file($fileTmpName, $uploadPath.$id);
                $path = $uploadPath.$id;
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
    $summary = $_POST['summary'];

    $query = "UPDATE writer
                SET 
                heading = '$heading' , 
                content = '$content' ,
                date = '$date' , 
                total_like = 10, 
                comment = 'comment',
                writerimg = '$path' , 
                writername = 'name',
                category = '$cat' ,
                tags = '$subheading' ,
                summary = '$summary'
                WHERE id = $id";

    $query_run = mysqli_query($connect,$query) or die("Something Went Wrong");
    if($query_run) 
    {   
        echo '<script> alert("Data Updated Successfully") </script>';
         
    }
    else{
        echo '<script>alert("Something Went Wrong") </script>'; 
    }

} 
?>