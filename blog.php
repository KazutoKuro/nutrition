<?php require("header.php");?>
<?php require("nav.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_user/blog.css">
    <title>Document</title>
</head>
<body>
    <div class="img1">
        <div class="ptext">
            <span class="cont trans">
                Blogs
            </span>
        </div>
    </div>

    <div class="heading">
        <h2>Some Well-Know Blogs</h2>
    </div>

    <!-- Blog Card -->
    <section class="blog">
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg1.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Healhty lifestyle: A key step to managing</h2>
                    <a class="btn" href="#">View all</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg2.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Foods for Healthy Eyes</h2>
                    <a class="btn" href="blog_eyes.php">View all</a>
                </div>
            </div>

            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg3.jpg" alt="">
                </div>
                <div class="content">
                    <h2>30 days challenge for Clean Eating</h2>
                    <a class="btn" href="#">View all</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg4.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Eat your Vegetables</h2>
                    <a class="btn" href="blog_vegetables.php">View all</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg5.jpg" alt="">
                </div>
                <div class="content">
                    <h2>DIET but Don't STARVE</h2>
                    <a class="btn" href="#">View all</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg6.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Probiotics</h2>
                    <a class="btn" href="blog_probiotics.php">View all</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="blogimg/blogimg7.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Are Walnuts good for you?</h2>
                    <a class="btn" href="blog_walnuts.php">View all</a>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
<?php require("footer.php");?>