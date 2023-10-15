
<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:order sent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>




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

                            <h1 class="hero-title text-center mb-5">Order Form</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                
                                <?php
			                        include("connection.php");
			                         $sel=mysql_query("select * from item  where img='$i' ");
			                         $mat=mysql_fetch_array($sel);

			                     ?>  
            <form  method="post">
                                    <form role="form" method="post">
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>"  class="form-control"required>

                                            <label>Product No</label>
                                        </div>
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="form-control"required>

                                            <label>Price</label>

                                            <div class="form-floating mb-4 p-0">
                                            <input type="text" name="nam" id="nam"  class="form-control"required>
                                            <label>Name</label>
                                        </div>
                                        
                                        <div class="form-floating mb-4 p-0">
                                            <input type="text" name="pho" id="pho"  class="form-control"required>

                                            <label>Phone</label>
                                        </div>
                                        <div class="form-floating mb-4 p-0">
                                            <textarea id="add" name="add" rows="0" cols="0"  class="form-control"></textarea>
                                            <label>Address</label>
                                        </div>
                                        <input type="submit" name="ord" id="ord" value="sent order" class="btn custom-btn form-control mt-4 mb-3">
                                        <input type="submit" name="Cancel" value="Cancel"class="btn custom-btn form-control mt-4 mb-3" />
				

                                        <p class="text-center">Don’t have an account? <a href="sign-up.php">Create One</a></p>

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
