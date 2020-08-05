<?php include('includes/head.php') ?>
<?php
$id = $_GET['id'];
$query_run = mysqli_query($connect,"DELETE FROM writer where id='$id'");
    if($query_run) 
    {   
        echo '<script> alert("Data Deleted Successfully") </script>';
        header("Location:manage.php");
         
    }
    else{
        echo '<script>alert("Something Went Wrong") </script>'; 
    } 
?>