<?php require("header.php");?>
<?php require("nav.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="css_user/home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="pimg1">
        <div class="hometext" data-aos="fade-up">
            <h2>Precious Nutrition</h2>
            <p data-aos="fade-up"><span>Providing nutrition and lifestyle consultations to help you live life to the full</span></p>
            <p data-aos="fade-up">What does being well look like to you? &#8194; <a class="btn btn-sm" href="contactus.php" data-aos="fade-up">Get in Touch!</a></p>
        </div>
    </div>

     <!-- Go to About Section -->
     <main>
        <section class="about" id="about">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-12 col-md-6 text-center text-md-left" data-aos="fade-right">
                        <div class="section-heading mb-3">
                            <h4>Start your journey to optimum health</h4>
                            <h1 class="display-4">The Therapy</h1>
                        </div>
                        <p>
                            Nutritional Therapy is the application of nutrition science in the promotion of health, peak performance and individual care. Nutritional Therapists use a wide range of tools to assess and identify potential nutritional imbalances and understand how these may contribute to an individual’s symptoms and health concerns.
                        </p>
                        <a class="btn mb-5 mb-md-0" href="about.php">Find out more</a>
                    </div>

                    <div class="col-12 col-md-6" data-aos="fade-left">
                        <img class="img-fluid" src="bg_img/bgimg11.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Video Intro -->
    <section class="video-section">
      <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="video/video1.mp4">
        </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white ">
            <h2 class="display-3 text-shadow" data-aos="fade-right">Cook, Eat and Love!</h2>
            <p class="lead mb-0 " data-aos="fade-left">Over 100 Foods, Fruits, Vegetables EverDay. &#8194; <a href="vegetarian.php" class="btn btn-sm">View</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Section  -->
    <section class="therapy mt-2">
        <div class="container">
            <div  class="row align-items-lg-center mb-3">
                <div class="col-lg-6">
                    <h1 class="display-4">
                        How can nutritional therapy help you?
                    </h1>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Improve nutritional status</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Balance blood sugar levels</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Improve energy production</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Optimise digestive function and absorption</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Support skin health</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Stabilise mood</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Balance hormones</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Support cardio-vascular health</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Improve immune function</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Advice on healthy eating</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></span></i>Identify food allergies and intolerances</li>
                    </ul>
                </div>
                
                <div class="col-12 col-xl-6" data-aos="fade-up">
                    <img class="img-fluid" src="bg_img/bgimg12.jpg" alt="">
                </div>
            </div>
            <p>
                Suitable for everyone! Nutritional Therapy can support those with fatigue and sleeping problems, stress management and gut disorders, skin trouble and chronic health issues, sustainable weight management, and hormonal imbalances. It would also suit those who are seeking preventative measures and healthy aging considerations.
            <br>
                As Nutritional Therapists, we follow an integrative approach and look at a person as a whole, not just an isolated set of symptoms. This enables us to address long-standing chronic conditions and acute symptoms; as well as implementing preventative measures to one’s individual needs in the increasingly demanding environment we live in.
            </p>
        </div>
    </section>

    <!-- Go to Contact Page -->
    <div class="contact">
        <div class="col-lg-6 mr-left">
            <h4 data-aos="fade-right">
                Ready to find out more  Nutrition List?
            </h4>
            </div>
            <div class="offset-1 col-lg-2 mr-right" data-aos="fade-left">
            <div class="inputBox">
                <a href="vitaminlist_user.php" type="submit">View More!</a>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <section class="blog-section">
        <h1 class="display-4">Popular Blogs Among People</h1>
        <hr width="25%">
        <div class="blog-card" data-aos="fade-up">
            <div class="blog-post">
                <div class="blog-post-img">
                    <img src="bg_img/bgimg15.jpg" alt="">
                </div>
                <div class="blog-post-info">
                    <h1 class="blog-post-title">Eat your Vegetables</h1>
                    <p class="blog-post-text">
                        Vegetables in your diet are extremely important. Veggies are rich in nutrients and antioxidant&#44; which boost your health, help fight off disease and weight control due to their low-calorie content.
                    </p>
                    <a href="blog.php" class="blog-post-btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="blog-card" data-aos="fade-up">
            <div class="blog-post">
                <div class="blog-post-info-right">
                    <h1 class="blog-post-title">Food for Healthy Eyes</h1>
                    <p class="blog-post-text">
                        A variety of colorful foods that is rich in antioxidants protects your eyes from many problems. Add foods rich in selenium, vitamin E, Vitamin C, alpha-lipoic acid, zinc, and omega-3 can help you and your family in a significant reduction of eye health problems.
                    </p>
                    <a href="blog.php" class="blog-post-btn">Read More</a>
                </div>
                <div class="blog-post-img-right">
                    <img src="bg_img/bgimg14.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="blog-card" data-aos="fade-up">
            <div class="blog-post">
                <div class="blog-post-img">
                    <img src="bg_img/bgimg16.jpg" alt="">
                </div>
                <div class="blog-post-info">
                    <h1 class="blog-post-title">Are walnuts good for you?</h1>
                    <p class="blog-post-text">
                        Walnuts are one of the Smartest foods also called as &ldquo;Brain Food&rdquo; not only because of its wrinkled appearance but also its highly valuable content.
                    </p>
                    <a href="blog.php" class="blog-post-btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>
<?php require("footer.php");?>