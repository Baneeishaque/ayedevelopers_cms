<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php
            echo $row["title"];
            ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Squad theme CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="color/default.css" rel="stylesheet">

        <style>
            .top-nav-collapse {
                background: <?php
                echo $row["top-nav-collapse-background"];
                ?>;
            }
        </style>
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">




        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">


                    <h1>
                        <input id="site_title" value = "<?php
                        echo $row["title"];
                        ?>"/>

                    </h1>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">
                                <input id="nav1" value = "<?php
                                echo $row["nav1"];
                                ?>" />

                            </a></li>
                        <li><a href="#">
                                <input id="nav2" value = "<?php
                                echo $row["nav2"];
                                ?>" />

                            </a></li>
                        <li><a href="#">
                                <input id="nav3" value = "<?php
                                echo $row["nav3"];
                                ?>" />

                            </a></li>
                        <li><a href="#">
                                <input id="nav4" value = "<?php
                                echo $row["nav4"];
                                ?>" />

                            </a></li>
                        <li>



                            <a href="index.php" >Logout</a>

                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Section: intro -->
        <section id="intro" class="intro">

            <div class="slogan">
                <h2>&nbsp;</h2>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <div class="page-scroll">
                <a href="#service" class="btn btn-circle">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </section>

        <form id="logoimageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>

            <input type="file" name="logoimage" id="logoimage" />

        </form>
        <div id="logoimagepreview">

        </div>

        <!-- /Section: intro -->

        <!-- Section: about -->
        <section id="about" class="home-section text-center">
            <div class="heading-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>About us</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="0.2s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><input id="name1" value = "<?php
                                        echo $row["name1"];
                                        ?>" /></h5>
                                    <p class="subtitle"><input id="namede1" value = "<?php
                                        echo $row["namede1"];
                                        ?>"</p>
                                    <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>

                                    <form id="aboutimageform1" method="post" enctype="multipart/form-data" action='ajaximage1.php'>
                                        <input type="file" name="aboutimage1" id="aboutimage1" />
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><input id="name2" value = "<?php
                                        echo $row["name2"];
                                        ?>" /></h5>
                                    <p class="subtitle"><input id="namede2" value = "<?php
                                        echo $row["namede2"];
                                        ?>"</p>
                                    <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>
                                    <form id="aboutimageform2" method="post" enctype="multipart/form-data" action='ajaximage2.php'>
                                        <input type="file" name="aboutimage2" id="aboutimage2" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="0.8s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><input id="name3" value = "<?php
                                        echo $row["name3"];
                                        ?>" /></h5>
                                    <p class="subtitle"><input id="namede3" value = "<?php
                                        echo $row["namede3"];
                                        ?>"</p>
                                    <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>
                                    <form id="aboutimageform3" method="post" enctype="multipart/form-data" action='ajaximage3.php'>
                                        <input type="file" name="aboutimage3" id="aboutimage3" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="1s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><input id="name4" value = "<?php
                                        echo $row["name4"];
                                        ?>" /></h5>
                                    <p class="subtitle"><input id="namede4" value = "<?php
                                        echo $row["namede4"];
                                        ?>"</p>
                                    <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>
                                    <form id="aboutimageform4" method="post" enctype="multipart/form-data" action='ajaximage4.php'>
                                        <input type="file" name="aboutimage4" id="aboutimage4" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <div id="aboutimagepreview">

                </div>
            </div>
        </section>
        <!-- /Section: about -->


        <!-- Section: services -->
        <section id="service" class="home-section text-center bg-gray">

            <div class="heading-about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>Our Services</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-1.png" alt="" />
                                    <form id="serviceimageform1" method="post" enctype="multipart/form-data" action='ajaximages1.php'>
                                        <input type="file" name="serviceimage1" id="serviceimage1" />
                                    </form>
                                </div>
                                <div class="service-desc">
                                    <h5><input id="serv1t" value = "<?php
                                        echo $row["serv1t"];
                                        ?>"</h5>
                                    <p><input id="serv1d" value = "<?php
                                        echo $row["serv1d"];
                                        ?>" ></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-2.png" alt="" />
                                    <form id="serviceimageform2" method="post" enctype="multipart/form-data" action='ajaximages2.php'>
                                        <input type="file" name="serviceimage2" id="serviceimage2" />
                                    </form>
                                </div>
                                <div class="service-desc">
                                    <h5><input id="serv2t" value = "<?php
                                        echo $row["serv2t"];
                                        ?>"</h5>
                                    <p><input id="serv2d" value = "<?php
                                        echo $row["serv2d"];
                                        ?>"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-3.png" alt="" />
                                    <form id="serviceimageform3" method="post" enctype="multipart/form-data" action='ajaximages3.php'>
                                        <input type="file" name="serviceimage3" id="serviceimage3" />
                                    </form>
                                </div>
                                <div class="service-desc">
                                    <h5><input id="serv3t" value = "<?php
                                        echo $row["serv3t"];
                                        ?>"</h5>
                                    <p><input id="serv3d" value = "<?php
                                        echo $row["serv3d"];
                                        ?>"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-4.png" alt="" />
                                    <form id="serviceimageform4" method="post" enctype="multipart/form-data" action='ajaximages4.php'>
                                        <input type="file" name="serviceimage4" id="serviceimage4" />
                                    </form>
                                </div>
                                <div class="service-desc">
                                    <h5><input id="serv4t" value = "<?php
                                        echo $row["serv4t"];
                                        ?>"</h5>
                                    <p><input id="serv4d" value = "<?php
                                        echo $row["serv4d"];
                                        ?>"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
                <div id="serviceimagepreview">

                </div>
            </div>
        </section>
        <!-- /Section: services -->




        <!-- Section: contact -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <div class="section-heading">
                                    <h2>Get in touch</h2>
                                    <i class="fa fa-2x fa-angle-down"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-2 col-lg-offset-5">
                        <hr class="marginbot-50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <address>
                            <strong>We\'re on social networks</strong><br>
                            <ul class="company-social">
                                <li class="social-facebook"><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <input id="facebook" value = "<?php
                                echo $row["facebook"];
                                ?>"<br/><br/>
                                <li class="social-twitter"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li><input id="twitter" value = "<?php
                                echo $row["twitter"];
                                ?>"<br/><br/>
                                <li class="social-dribble"><a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li><input id="dribble" value = "<?php
                                echo $row["dribble"];
                                ?>"<br/><br/>
                                <li class="social-google"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li><input id="google" value = "<?php
                                echo $row["google+"];
                                ?>"<br/>
                            </ul>	
                        </address>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget-contact">
                            <h5>Main Office</h5>

                            <address>
                                <strong><input id="address1" value = "<?php
                                    echo $row["address1"];
                                    ?>"</strong><br>
                                <input id="address2" value = "<?php
                                echo $row["address2"];
                                ?>"<br>
                                <input id="address3" value = "<?php
                                echo $row["address3"];
                                ?>"<br>
                                <input id="address4" value = "<?php
                                echo $row["address4"];
                                ?>"<br>
                                <input id="address5" value = "<?php
                                echo $row["address5"];
                                ?>"
                                       <br>
                                <input id="address6" value = "<?php
                                echo $row["address6"];
                                ?>"<br><br>
                                <abbr title="Phone">Ph:</abbr> <input id="phone" value = "<?php
                                echo $row["phone"];
                                ?>"
                            </address>

                            <address>
                                <strong>Email</strong><br>
                                <a href="mailto:#"><input id="email" value = "<?php
                                    echo $row["email"];
                                    ?>"</a>
                            </address>	


                        </div>	
                    </div>

                </div>	

            </div>
        </section>
        <!-- /Section: contact -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wow shake" data-wow-delay="0.4s">
                            <div class="page-scroll marginbot-30">
                                <a href="#intro" id="totop" class="btn btn-circle">
                                    <i class="fa fa-angle-double-up animated"></i>
                                </a>
                            </div>
                        </div>
                        <p>&copy;Copyright <input id="copyright" value = "<?php
                                                  echo $row["copyright"];
                                                  ?>">. All rights reserved.</p>
                    </div>
                </div>	
            </div>
        </footer>

        <!-- Core JavaScript Files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>	
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
        <script>
            $(document).ready(function () {

                $('#site_title').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#site_title').val() + '&type=title',
                        success: function ()
                        {
                            alert($('#site_title').val());
                        }
                    });
                });

                $('#nav1').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#nav1').val() + '&type=nav1',
                        success: function ()
                        {
                            alert($('#nav1').val());
                        }
                    });
                });

                $('#nav2').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#nav2').val() + '&type=nav2',
                        success: function ()
                        {
                            alert($('#nav2').val());
                        }
                    });
                });

                $('#nav3').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#nav3').val() + '&type=nav3',
                        success: function ()
                        {
                            alert($('#nav3').val());
                        }
                    });
                });

                $('#nav4').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#nav4').val() + '&type=nav4',
                        success: function ()
                        {
                            alert($('#nav4').val());
                        }
                    });
                });

                $('#name1').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#name1').val() + '&type=name1',
                        success: function ()
                        {
                            alert($('#name1').val());
                        }
                    });
                });

                $('#name2').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#name2').val() + '&type=name2',
                        success: function ()
                        {
                            alert($('#name2').val());
                        }
                    });
                });

                $('#name3').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#name3').val() + '&type=name3',
                        success: function ()
                        {
                            alert($('#name3').val());
                        }
                    });
                });

                $('#name4').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#name4').val() + '&type=name4',
                        success: function ()
                        {
                            alert($('#name4').val());
                        }
                    });
                });

                $('#namede1').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#namede1').val() + '&type=namede1',
                        success: function ()
                        {
                            alert($('#namede1').val());
                        }
                    });
                });

                $('#namede2').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#namede2').val() + '&type=namede2',
                        success: function ()
                        {
                            alert($('#namede2').val());
                        }
                    });
                });

                $('#namede3').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#namede3').val() + '&type=namede3',
                        success: function ()
                        {
                            alert($('#namede3').val());
                        }
                    });
                });

                $('#namede4').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#namede4').val() + '&type=namede4',
                        success: function ()
                        {
                            alert($('#namede4').val());
                        }
                    });
                });

                $('#serv1t').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv1t').val() + '&type=serv1t',
                        success: function ()
                        {
                            alert($('#serv1t').val());
                        }
                    });
                });

                $('#serv2t').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv2t').val() + '&type=serv2t',
                        success: function ()
                        {
                            alert($('#serv2t').val());
                        }
                    });
                });

                $('#serv3t').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv3t').val() + '&type=serv3t',
                        success: function ()
                        {
                            alert($('#serv3t').val());
                        }
                    });
                });

                $('#serv4t').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv4t').val() + '&type=serv4t',
                        success: function ()
                        {
                            alert($('#serv4t').val());
                        }
                    });
                });

                $('#serv1d').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv1d').val() + '&type=serv1d',
                        success: function ()
                        {
                            alert($('#serv1d').val());
                        }
                    });
                });

                $('#serv2d').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv2d').val() + '&type=serv2d',
                        success: function ()
                        {
                            alert($('#serv2d').val());
                        }
                    });
                });

                $('#serv3d').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv3d').val() + '&type=serv3d',
                        success: function ()
                        {
                            alert($('#serv3d').val());
                        }
                    });
                });

                $('#serv4d').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#serv4d').val() + '&type=serv4d',
                        success: function ()
                        {
                            alert($('#serv4d').val());
                        }
                    });
                });

                $('#address1').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address1').val() + '&type=address1',
                        success: function ()
                        {
                            alert($('#address1').val());
                        }
                    });
                });

                $('#address2').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address2').val() + '&type=address2',
                        success: function ()
                        {
                            alert($('#address2').val());
                        }
                    });
                });

                $('#address3').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address3').val() + '&type=address3',
                        success: function ()
                        {
                            alert($('#address3').val());
                        }
                    });
                });

                $('#address4').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address4').val() + '&type=address4',
                        success: function ()
                        {
                            alert($('#address4').val());
                        }
                    });
                });

                $('#address5').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address5').val() + '&type=address5',
                        success: function ()
                        {
                            alert($('#address5').val());
                        }
                    });
                });

                $('#address6').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#address6').val() + '&type=address6',
                        success: function ()
                        {
                            alert($('#address6').val());
                        }
                    });
                });

                $('#phone').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#phone').val() + '&type=phone',
                        success: function ()
                        {
                            alert($('#phone').val());
                        }
                    });
                });

                $('#email').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#email').val() + '&type=email',
                        success: function ()
                        {
                            alert($('#email').val());
                        }
                    });
                });

                $('#copyright').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#copyright').val() + '&type=copyright',
                        success: function ()
                        {
                            alert($('#copyright').val());
                        }
                    });
                });

                $('#facebook').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#facebook').val() + '&type=facebook',
                        success: function ()
                        {
                            alert($('#facebook').val());
                        }
                    });
                });

                $('#twitter').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#twitter').val() + '&type=twitter',
                        success: function ()
                        {
                            alert($('#twitter').val());
                        }
                    });
                });

                $('#dribble').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#dribble').val() + '&type=dribble',
                        success: function ()
                        {
                            alert($('#dribble').val());
                        }
                    });
                });

                $('#google').change(function () {
                    $.ajax({
                        type: 'GET',
                        url: 'update.php',
                        data: 'text=' + $('#google').val() + '&type=google',
                        success: function ()
                        {
                            alert($('#google').val());
                        }
                    });
                });

                $('#logoimage').change(function () {


                    $("#logoimageform").ajaxForm({
                        target: '#logoimagepreview'
                    }).submit();


                });

                $('#aboutimage1').change(function () {


                    $("#aboutimageform1").ajaxForm({
                        target: '#aboutimagepreview'
                    }).submit();


                });

                $('#aboutimage2').change(function () {


                    $("#aboutimageform2").ajaxForm({
                        target: '#aboutimagepreview'
                    }).submit();


                });

                $('#aboutimage3').change(function () {


                    $("#aboutimageform3").ajaxForm({
                        target: '#aboutimagepreview'
                    }).submit();


                });

                $('#aboutimage4').change(function () {


                    $("#aboutimageform4").ajaxForm({
                        target: '#aboutimagepreview'
                    }).submit();


                });

                $('#serviceimage1').change(function () {


                    $("#serviceimageform1").ajaxForm({
                        target: '#serviceimagepreview'
                    }).submit();


                });

                $('#serviceimage2').change(function () {


                    $("#serviceimageform2").ajaxForm({
                        target: '#serviceimagepreview'
                    }).submit();


                });

                $('#serviceimage3').change(function () {


                    $("#serviceimageform3").ajaxForm({
                        target: '#serviceimagepreview'
                    }).submit();


                });

                $('#serviceimage4').change(function () {


                    $("#serviceimageform4").ajaxForm({
                        target: '#serviceimagepreview'
                    }).submit();


                });

            });
        </script>

    </body>


</html>;


