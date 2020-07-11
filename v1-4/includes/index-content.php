<div class="home-page-posts animated fadeIn ">
<?php 

$query = "SELECT * FROM writer ORDER BY date DESC";
$query_run = mysqli_query($connect,$query) or die("Something Went Wrong");

if(mysqli_num_rows($query_run)>0)
{
    while($postdata = mysqli_fetch_array($query_run))
    {
    ?>
    <article class="post">
            <div class="post-preview col-xs-10  no-gutter">
                <a href="stop-thinking-and-start-doing.html">
                    <!-- <script>
                        $imgdata = "<?php echo $postdata['writerimg']?>";
                        console.log($imgdata);
                        if($imgdata == 0){
                            console.log('abc');
                            $('div.card.mb-4').remove();
                        }
                    </script> -->
                        <div class="card mb-4"> 
                            <a href="blog.php?id=<?php echo $postdata['id']?>"><img class="card-img-top" src="./<?php echo $postdata['writerimg']?>"></a>
                        </div>
                    </a>
                    <h2><a href="blog.php?id=<?php echo $postdata['id']?>"><?php echo $postdata['heading']?></a></h2>
                    <p><?php echo $postdata['summary']?></p>
                    <div class="meta" style="margin: 0;">
                        <a href=""><?php echo $postdata['writername'];?></a> in <a href=''><?php echo $postdata['category']?></a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> <?php echo $postdata['date']?> minutes    
                    </div>    
                    <div class="meta" style="margin: 0;">
                        <a href="#"> 20 Reviews | Comments</a>
                        <div class="stars"> 
                        </div>
                    </div>
            </div>
            
            <div class="d-flex flex-column align-items-center justify-content-between col-xs-2  no-gutter">
                <img src="./img/fred.jpg" class="user-icon user-1" alt="user-image">
                <!-- <a class="like-button mt-5" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                <a class="like-button mt-5" href="#"><i class="fa fa-share" aria-hidden="true"></i></a> -->
            </div>    
    </article>
    <?php

    }
}
else
{
    echo '<script> alert("Something Went Wrong");</script>';
}
?>

        <script>
            $(document).ready(function(){
                // $("a.like-button.mt-5").click(function(){
                //     $("a.like-button.mt-5").toggleClass("active");
                //     console.log("Like Pressed");
                // });
                $("a.like-button.mt-5").on("click", function(){
                    $(this).toggleClass("active");
                    console.log("Like Pressed");
                });

            });
        </script>
</div>

   
                <!-- <form action="" >
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
                </form> -->

<!-- <style>
    .stars-outer {
  position: relative;
  display: inline-block;
  cursor: pointer;
    }

    .stars-inner {
    position: absolute;
    top: 0;
    left: 0;
    white-space: nowrap;
    overflow: hidden;
    width: 0;
    }

    .stars-outer::before {
    content: "\f005";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #ccc;
    }

    .stars-inner::before {
    content: "\f005";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    color: #f8ce0b;
    }
    </style>
    <script>
    $(document).ready(function(){
                    $(".stars-outer").on("click", function(){
                        $('.stars-inner').css('width','100');
                        console.log("Like Pressed");
                    });

                });
    </script>
                    <div class="stars-outer">
                    <div id = "s1" class="stars-inner"></div>
                </div>
                <div class="stars-outer">
                    <div id = "s2" class="stars-inner"></div>
                </div>
                <div class="stars-outer">
                    <div id = "s2" class="stars-inner"></div>
                </div>
                <div class="stars-outer">
                    <div id = "s2" class="stars-inner"></div>
                </div>
                <div class="stars-outer">
                    <div id = "s2" class="stars-inner"></div>
                </div> -->