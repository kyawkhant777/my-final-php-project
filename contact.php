<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Little  Store</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <strong><span>Little</span> Convenience Store</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.php" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="products.php">Products</a>
                            </li>

                            
                            <li class="nav-item">
                                <a class="nav-link active" href="register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.php">Contact</a>
                            </li>
                        </ul>

                        <div class="nav-item">
                            <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Say hello to us</span>
                                <span class="d-block text-dark">love to hear you</span>
                                <span class="d-block text-dark">Have a nice day<span>
                            </h1>   
                        </div>
                    </div>
                </div>

                <img src="images/header/h2.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            
<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}

?>
                           <h2 class="mb-4">Let's <span>begin</span></h2>
                            <h3 class="mb-4"><span>Contact Information</span></h3>
                            <form class="contact-form me-lg-5 pe-lg-3" name="contact" method="post" action="#">
                           
                                <div class="form-floating">
                                    <input input type="text" id="t1" name="t1" class="form-control" placeholder="Full name" required>

                                    <label for="name">Full name</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input  type="email" id="t2" name="t2" class="form-control" placeholder="Email address" required>

                                    <label for="email">Email address</label>
                                </div>
                                
                                <div class="form-floating my-4">
                                    <input  type="text" id="t3" name="t3" class="form-control" placeholder="Phone Number" required>

                                    <label for="subject">Phone Number</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <textarea id="t4" name="t4" rows="0" cols="0" class="form-control" placeholder="Tell about the shop as you think" required style="height: 160px"></textarea>

                                    <label for="message">Send Message</label>
                                </div>

                                <div class="col-lg-5 col-6">
                                <input type="submit" name="sub"  id="sub" value="Send" class="form-control" />
                                </div>
                            </form>
                            <h2><?php echo $er;?></h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 ms-auto">
                            <div class="row">
                                <div class="col-6 border-end contact-info">
                                    <h6 class="mb-3">New Business</h6>

                                    <a href="mailto:hello@company.com" class="custom-link">
                                        Kyawkhant@company.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 contact-info">
                                	<h6 class="mb-3">Main Studio</h6>

                                    <a href="mailto:studio@company.com" class="custom-link">
                                        kyawkhant@company.com
                                        <i class="bi-arrow-right ms-2"></i>
                                    </a>
                                </div>

                                <div class="col-6 border-top border-end contact-info">
                                    <h6 class="mb-3">Our Office</h6>

                                    <p class="text-muted">Yangon Division Thingangyun township,May Kha Housing</p>
                                </div>

                                <div class="col-6 border-top contact-info">
                                    <h6 class="mb-3">Our Socials</h6>

                                    <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                        <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.php">Little</a>Convenience Store</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Kyaw Khant</a></p>
                    </div>


                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social App</h5>

                        <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>