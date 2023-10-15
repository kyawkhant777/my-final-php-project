<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
}
 ?>
 <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Little Shop</title>

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
                        <strong><span>Little</span>Convenience Store</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.php" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Insert</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="view-product.php">Products</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="view rder.php">Order</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="view feedback.php">Feedback</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log Out</a>
                            </li>
                        </ul>

                        <div class="nav-item">
                            <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                         
                        </div>
                    </div>
                </div>
            </nav>

            <section class="sign-in-form section-padding">
                <div class="container">
                <h2 align="center"> View Customers Feedback Message</h2>
       <table  style="border-color:#000000;border-style: dotted;margin-left:-40px;" width="1000px" align="left" >
					
					<tr><th width="100px" height="50px">ID:</th>					
						<th width="100px" height="50px">Name:</th>
						<th width="100px" height="50px">Email:</th>
						<th width="100px" height="50px">Phone:</th>	
						<th width="100px" height="50px">Message:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from content ");
						while($row=mysql_fetch_array($sel))
							{		
									$id=$row['con_id'];					
									$name=$row['name'];
									$email=$row['email'];
									$subject=$row['subject'];
									$message=$row['message'];
									
						?>
					 <tr>
						
						<td width="100px" height="50px"><?php echo $id; ?></td>
						<td width="100px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $phone; ?></td>
						<td width="100px" height="50px"><?php echo $mesg; ?></td>
						
						
												
					  </tr>			
					<?php				  
							}	
					?>
					</table>
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