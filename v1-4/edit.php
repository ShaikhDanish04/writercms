<!DOCTYPE html>
<html class="no-js">

<?php include('includes/head.php');?>


  <body class="">


<header>
    <?php include('includes/blog-nav.php'); ?>
</header>

<main class="container">
    <div class="row">

        <div class="col-xs-12 col-md-8 single-content-sidebar" style="padding-bottom: 0px;">

            <h3>Write Your Post</h3>

            <form method="POST" action="insertdata.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="heading">Title</label>
                    <input type="text" placeholder="Enter Your Heading of Post" class="form-control" name="heading">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Select Post Category</label>
                            <select class="form-control" name="cat">
                                <option value="" disabled selected>Choose your country</option>
                                <option value="Motivation">Motivation</option>
                                <option value="Leadership">Leadership</option>
                                <option value="Journey">Journey</option>
                                <option value="Storytime">Storytime</option>
                                <option value="Life">Life</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12">
                        <label>Select Image</label>
                            <div class="custom-file form-control">
                                <input type="file" class="custom-file-input" id="customFile" name="file">
                                <label class="custom-file-label mt-0" for="customFile" style="font-size: 15.5px;">Choose file</label>          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub-heading">Sub Heading</label>
                    <input type="text" placeholder="Enter Sub-Heading" class="form-control" name="sub-heading">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" placeholder="Enter Content Here"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-default" type="submit" name="submit" value="Save">
                    <input class="btn btn-default" type="button" value="+ Content">
                    <input class="btn btn-default" type="button" value="+ Sub-Heading">
                    <input class="btn btn-default" type="button" value="+ Image">
                    
                </div>
            </form>  

        </div>

        <div class="col-xs-12 col-md-3 col-md-offset-1 single-content-sidebar-area">

        </div>
    </div> <!--/row -->

</main> <!-- /container -->

<?php include('includes/script.php') ?>
  </body>
</html>
