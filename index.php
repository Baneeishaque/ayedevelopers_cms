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


                    <h1> <?php
                        echo $row["title"];
                        ?></h1>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#intro"><?php
                                echo $row["nav1"];
                                ?></a></li>
                        <li><a href="#about"><?php
                                echo $row["nav2"];
                                ?></a></li>
                        <li><a href="#service"><?php
                                echo $row["nav3"];
                                ?></a></li>
                        <li><a href="#contact"><?php
                                echo $row["nav4"];
                                ?></a></li>
                        <li>
                            <a href="login.php" >Login</a>
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
                                    <h5><?php
                                        echo $row["name1"];
                                        ?></h5>
                                    <p class="subtitle"><?php
                                        echo $row["namede1"];
                                        ?></p>
                                    <div class="avatar"><img src="img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="0.5s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><?php
                                        echo $row["name2"];
                                        ?></h5>
                                    <p class="subtitle"><?php
                                        echo $row["namede2"];
                                        ?></p>
                                    <div class="avatar"><img src="img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="0.8s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><?php
                                        echo $row["name3"];
                                        ?></h5>
                                    <p class="subtitle"><?php
                                        echo $row["namede3"];
                                        ?></p>
                                    <div class="avatar"><img src="img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="wow bounceInUp" data-wow-delay="1s">
                            <div class="team boxed-grey">
                                <div class="inner">
                                    <h5><?php
                                        echo $row["name4"];
                                        ?></h5>
                                    <p class="subtitle"><?php
                                        echo $row["namede4"];
                                        ?></p>
                                    <div class="avatar"><img src="img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                                </div>
                                <div class="service-desc">
                                    <h5><?php
                                        echo $row["serv1t"];
                                        ?></h5>
                                    <p><?php
                                        echo $row["serv1d"];
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-2.png" alt="" />
                                </div>
                                <div class="service-desc">
                                    <h5><?php
                                        echo $row["serv2t"];
                                        ?></h5>
                                    <p><?php
                                        echo $row["serv2d"];
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-3.png" alt="" />
                                </div>
                                <div class="service-desc">
                                    <h5><?php
                                        echo $row["serv3t"];
                                        ?></h5>
                                    <p><?php
                                        echo $row["serv3d"];
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInRight" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="img/icons/service-icon-4.png" alt="" />
                                </div>
                                <div class="service-desc">
                                    <h5><?php
                                        echo $row["serv4t"];
                                        ?></h5>
                                    <p><?php
                                        echo $row["serv4d"];
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="boxed-grey">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label for="email">
                                                Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">
                                                Subject</label>
                                            <input type="text" class="form-control" id="subject" placeholder="Enter subject" required="required" />

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                            Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget-contact">
                            <h5>Main Office</h5>

                            <address>
                                <strong><?php
                                    echo $row["address1"];
                                    ?></strong><br>
                                <?php
                                echo $row["address2"];
                                ?><br>
                                    <?php
                                    echo $row["address3"];
                                    ?><br>
                                <?php
                                echo $row["address4"];
                                ?><br>
                                <?php
                                echo $row["address5"];
                                ?>
                                <br>
                                <?php
                                echo $row["address6"];
                                ?><br>
                                <abbr title="Phone">Ph:</abbr> <?php
                                echo $row["phone"];
                                ?>
                            </address>

                            <address>
                                <strong>Email</strong><br>
                                <a href="mailto:#"><?php
                                    echo $row["email"];
                                    ?></a>
                            </address>	
                            <address>
                                <strong>We\'re on social networks</strong><br>
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="<?php
                                        echo $row["facebook"];
                                        ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="<?php
                                        echo $row["twitter"];
                                        ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-dribble"><a href="<?php
                                        echo $row["dribble"];
                                        ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="social-google"><a href="<?php
                                        echo $row["google+"];
                                        ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                </ul>	
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
                        <p>&copy;Copyright <?php
                            echo $row["copyright"];
                            ?>. All rights reserved.</p>
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

    </body>


</html>
