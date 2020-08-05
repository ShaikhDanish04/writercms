<!DOCTYPE html>
<html class="no-js">

<?php include('includes/head.php');?>

<body class="">
<header>
    <?php include('includes/blog-nav.php'); ?>
</header>

<main class="container">

            <h1><center>Manage Your Post</center></h1>

            <div class="table-responsive" style="font-size:medium">          
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Writer Name</th>
                    <th>Category</th>
                    <th>Date/Time</th>
                    <th></th>
                    <th></th>
                    <th><a href="add.php"><button type="button" class="btn btn-success btn-sm">Add Post</button></a></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM writer ORDER BY date DESC";
                $query_run = mysqli_query($connect,$query) or die("Something Went Wrong");

                if(mysqli_num_rows($query_run)>0)
                {
                    while($postdata = mysqli_fetch_array($query_run))
                    {
                    ?>
                    <tr>
                        <td><?php echo $postdata['id'];?></td>
                        <td><img src="<?php echo $postdata['writerimg']?>" class="" style="width:30px; height:30px;"></td>
                        <td><?php echo $postdata['heading']?></td>
                        <td><?php echo $postdata['summary']?></td>
                        <td><?php echo $postdata['writername'];?></td>
                        <td><?php echo $postdata['category']?></td>
                        <td><?php echo $postdata['date']?></td>
                        <td><a href="blog.php?id=<?php echo $postdata['id'];?>"><button type="button" class="btn btn-primary btn-sm">View</button></a></td>
                        <td><a href="edit.php?id=<?php echo $postdata['id'];?>"><button type="button" class="btn btn-info btn-sm">Edit</button></a></td>
                        <td><a href="delete.php?id=<?php echo $postdata['id'];?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>
                    </tr>
                    <?php

                    }
                }
                else
                {
                    echo '<script> alert("Something Went Wrong");</script>';
                }
                ?>
                </tbody>
            </table>
            </div>
            </div>
</main> <!-- /container -->


<?php include('includes/script.php') ?>
  </body>
</html>
