
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

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Register Form</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>

                                    <form role="form" method="post">
                                      
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="t1" id="t1" value="<?php echo $mat['prod_no'];?>" class="form-control" >

                                            <label>Name</label>
                                        </div>
                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="t2" id="t2" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Eneter Your Phone" required>

                                            <label>Email</label>
                                        </div>
                                        
                                        <div class="form-floating p-0">
                                            <input type="password" name="t3" id="t3" class="form-control" placeholder="Password" required>

                                            <label for="password">Password</label>
                                        </div>
                                        <div class="form-floating p-0">
                                            <input type="text" name="t4" id="t4" class="form-control" placeholder="Password" required>

                                            <label for="password">Phone</label>
                                        </div>
                                        <div class="form-floating p-0">
                                            <input type="text" name="t5" id="t5" class="form-control" placeholder="Password" required>

                                            <label for="password">City</label>
                                        </div>
                                        <div class="form-floating p-0">
                                            <input type="text" name="t6" id="t6" class="form-control" placeholder="Password" required>

                                            <label for="password">Country</label>
                                        </div>
                                        <input type="submit" name="sub" id="sub" value="Register" class="btn custom-btn form-control mt-4 mb-3"/>
                                    
                                        <input type="reset" name="Cancel" value="Cancel" class="btn custom-btn form-control mt-4 mb-3" />
                                        <label><?php echo "<font color='red'>$error</font>";?></label>
                                    </form>
                               
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
                        <h4 class="text-white mb-3"><a href="index.php">Little</a> Convenience Store</h4>
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
