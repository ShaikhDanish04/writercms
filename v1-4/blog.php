<!DOCTYPE html>
<html class="no-js">

<?php include('includes/head.php') ?>
<?php
$id = $_GET['id'];
$postdata = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM writer where id='$id'"));
?>
  <body class="">


    <header class="hero-image" style='background-image: url(img/feature-fire.jpg);'>
    <?php include('includes/blog-nav.php') ?>
</header>

<main class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 single-content-sidebar" style="padding-bottom: 0px;">

            <h1><?php echo $postdata['heading']?></h1>
            <img src='<?php echo $postdata['writerimg']?>' class="" style="display:block; width:50%; margin-left: auto;  margin-right: auto; margin-top:2rem;margin-bottom:2rem;" alt="user-image">
            <h2><?php echo $postdata['tags']?></h2>
            <p><?php echo $postdata['content']?></p>
  
 <?php include('includes/comment.php') ?>
        </div><!-- main-content/col -->

        <div class="col-xs-12 col-md-3 col-md-offset-1 single-content-sidebar-area">

            <img src='img/fred.jpg' class="user-icon " alt="user-image">
            <div class="meta">

                <div class="sidebar-info">
                    <a href="author/michelle/index.html"><?php echo $postdata['writername']?></a> in <a href='category/coding/index.html'><?php echo $postdata['category']?></a>
                </div>

                <div class="sidebar-readtime">
                    <i class="fa fa-bookmark"></i> <?php echo $postdata['date']?>
                </div>
            <a href="#"> 20 Reviews | 5 Comments</a>
            <!-- <div class="stars">
                <form action="" >
                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                    <label class="star star-1" for="star-1"></label>
                </form>
                <a class="like-button mt-5" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
            </div>
        <script>
            $(document).ready(function(){
                $("a.like-button.mt-5").click(function(){
                    $("a.like-button.mt-5").toggleClass("active");
                    console.log("Like Pressed");
                });
            });
        </script>
            </div> -->
            

            <h2 class="favorites">Similar Posts</h2>

            
                
                <div class="similar-post">
                    <a href="stop-thinking-and-start-doing.html"><h3>Stop Thinking And Start Doing</h3></a>
                </div>
                
            
                
                <div class="similar-post">
                    <a href="supercharge-your-workflow-with-grunt.html"><h3>Supercharge Your Workflow With Grunt</h3></a>
                </div>
                
            
                
                <div class="similar-post">
                    <a href="ten-reasons-to-travel-the-world.html"><h3>10 Reasons to travel the world</h3></a>
                </div>
                
            
                
                <div class="similar-post">
                    <a href="why-react-js-will-change-the-world.html"><h3>Why React JS Will Change the World</h3></a>
                </div>
                
            
                
                <div class="similar-post">
                    <a href="fake-it-until-you-make-it.html"><h3>Fake It Until You Make It</h3></a>
                </div>
                
            
                
            
                
            
                
            
        </div>

    </div> <!--/row -->

</main> <!-- /container -->

<footer class="single">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-2">
            <img src="img/fred.jpg" class="user-icon " alt="user-image">
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="category-list">
                <p>Published <span><?php echo $postdata['date']?></span></p>
                <p><a href="author/michelle/index.html"><?php echo $postdata['writername']?></a> in <a href='category/coding/index.html'><?php echo $postdata['category']?></a></p>

                <div class="other-catergories">
                    <h3>Also found in</h3>

                    <ul>
                        
                        <li>
                            <a href='category/coding/index.html'>Coding</a>
                            ,
                        </li>
                        
                        <li>
                            <a href='category/coding/index.html'>Css</a>
                            
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div><!-- end col -->
        <div class="col-xs-12 col-sm-4">
            <div class="social">
                <p>Share this article</a>
                <div class="social-links">
                    <a class="social-icon" href="#" data-platform="twitter" data-message="" data-url="css-with-superpowers.html"><i class="fa fa-twitter"></i></a>

                    <a class="social-icon" href="#" data-platform="facebook" data-message="" data-url="css-with-superpowers.html"><i class="fa fa-facebook-official"></i></a>
                    <a class="social-icon" data-platform="mail"  href="mailto:help@writer-theme.com?body="><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div><!-- end row -->
</div>

    
</footer>
<?php include('includes/script.php') ?>
  </body>
</html>
