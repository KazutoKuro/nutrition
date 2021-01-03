<?php require("header.php");?>
<?php require("nav.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css_user/contactus.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>

        <div class="img1">
            <div class="ptext">
                <span class="cont trans">
                    Contact Us
                </span>
            </div>
        </div>

    <!-- Contact Form -->

    <section class="contact">
        <div class="content">
            <p data-aos="fade-right"><span>Get in Touch</span></p>
            <h2 data-aos="fade-left">Contact Information</h2>
        </div>
        <div class="container col-lg-12" data-aos="fade-up">  
            <div class="box text-center text-white">         
                <div class="image">
                    <!-- <img src="bg_img/bgimg2.jpg" alt="" class="img-fluid"> -->
                </div>
            </div>

            <div class="contactForm">
                <form>
                    <h5>Got a question? Just send us a message... We'd love to hear from you!</h5>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Phone Number</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- Contact Info -->

    <div class="info mt-3">
        <div class="contact-info mt-3 mb-3">
            <div class="card">
                <i class="card-icon far fa-envelope"></i>
                <p>ikkikurogane70@gmail.com</p>
            </div>
            <div class="card">
                <i class="card-icon fas fa-phone"></i>
                <p>+959795510380</p>
            </div>
            <div class="card">
                <i class="card-icon fas fa-map-marker-alt"></i>
                <p>Yangon, Myanmar</p>
            </div>
        </div>
    </div>

    
    <!-- Contact Form -->

    <section class="location">
        <div class="content" data-aos="fade-up">
            <h2>This is the place that I work from</h2>
        </div>
        <div class="container-fluid col-lg-12" data-aos="fade-up">  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1684.9014849519303!2d96.13052163364317!3d16.823101161982745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c9eca2b75b%3A0xd6abf239773b3969!2sInfo%20Myanmar%20University!5e0!3m2!1sen!2smm!4v1607118674534!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
</body>
</html>



<?php require("footer.php");?>