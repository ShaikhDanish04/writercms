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
                    <div id="form">
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
                        <input type="text" placeholder="Enter Sub-Heading" class="form-control" id="subheading" name="subheading">
                    </div>
                    <div class="form-group">
                        <label for="sub-heading">Summary</label>
                        <input type="text" placeholder="Enter Summary" class="form-control" id="summary" name="summary">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" placeholder="Enter Content Here"></textarea>
                    </div>
                    </div>
                <div class="form-group">
                    <input class="btn btn-default" type="submit" name="submit" value="Save" id="savebtn">
                    
                </div>
            </form>  
        <script>

                        $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        if(fileName == '')
                        {
                            alert("Please Select Image");
                            return false;
                        }
                        else{
                            var extension = $(this).val().split('.').pop().toLowerCase();
                            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                            {
                                alert("Invalid File Image");
                                $(this).val('');
                                return false;
                            }
                        }
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        filePreview(this);
                        
                        function filePreview(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('.custom-file + img').remove();
                                    $(".custom-file").after('<img src="'+e.target.result+'" class="" style="display:block; margin-left: auto;  margin-right: auto; margin-top:2rem;margin-bottom:2rem; height : 70%; width : 35%;" />');
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        });
        </script>
        </div>

        <div class="col-xs-12 col-md-3 col-md-offset-1 single-content-sidebar-area">

        </div>
    </div> <!--/row -->

</main> <!-- /container -->

<?php include('includes/script.php') ?>
  </body>
</html>
