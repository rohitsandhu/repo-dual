<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'classes/Conexio.php';
$con = new Conexio();

$con->openConnection();

$con->addUsuari("mailxD","nomxD", "cognomsxD", "contraxD");

$con->closeConnection();



?>


<!DOCTYPE html>
<html lang="en-es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CAL ROHIT</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets\img\logoGood.png" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#serveis">Serveis</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#galeria">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#on-ens-trobem">On ens trobem</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#equip">Equip</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ressenyes">Ressenyes</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Identificar-te</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <button class="btn-success" onclick="topFunction()" id="myBtn" title="Go to top">🡹</button>



    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Benvingut a la nostre casa...</div>
            <div class="masthead-heading text-uppercase"></div>
            <a class="btn btn-success btn-xl text-uppercase js-scroll-trigger" href="#serveis">Conèix-nos millor</a>
        </div>
    </header>
    <!-- serveis-->
    <section class="page-section" id="serveis">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Serveis</h2>
                <h3 class="section-subheading text-muted">Quins serveis oferim?</h3>
            </div>
            <div class="row text-center align-content-center">
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-home fa-stack-2x text-primary"></i>
                    </span>
                    <p class="text-muted"> <br>
                        Cal Rohit és una casa rural situada a Sobremunt, al Lluçanès, a una 1h 15min en cotxe de
                        Barcelona.
                        Tenim capacitat per 16 persones distribuïdes en 7 habitacions. Sis d’elles dobles amb bany a la
                        mateixa habitació i una per 4 persones amb bany al costat.

                        Cuina-menjador i sala d’estar en un sol ambient,També hi trobareu la sala de jocs amb futbolí,
                        dards, caseta i jocs pels més menuts.

                        Al voltant de la casa hi ha una amplia zona ajardinada, la piscina i spa climatitzats, el llit
                        elàstic i el porxo amb la barbacoa i el forn de llenya.</p>
                </div>

                <a href="index.php?reservar=true" class="btn btn-success href-custom"> RESERVAR </a>

            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="galeria">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeria</h2>
                <h3 class="section-subheading text-muted"> A continuació podem veure 20 imatges amb les parts de la
                    casa. </h3>
            </div>
            <div class="row">

            
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/1.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Entrada a la casa</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/2.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Piscina i Jacuzzi</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/3.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">El menjador</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/4.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Cuina</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/5.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Menjador i la sala d'estar</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/6.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Entrada en la casa</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/7.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sala d'estar amb xemeneia</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/8.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Dormitori amb llit de matrimoni</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/9.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lavabo</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/10.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Dormitori amb llit de matrimoni</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/11.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Habitació amb 2 llits individuals</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/12.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Dormitori amb llit de matrimoni</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/13.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sala de jocs</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/14.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Escales al 1r pis</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/15.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Balcó</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal16">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/16.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Casa</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal17">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/17.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Jardí</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal18">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/18.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Casa i l'edifici de la piscina</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal19">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/19.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Edifici de la piscina</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal20">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/20.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Piscina i Jacuzzi</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal21">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/imatgesCasa/21.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Jardí</div>
                            <div class="portfolio-caption-subheading text-muted">by Rohit S</div>

                        </div>
                    </div>
                </div>

            </div>



    </section>
    <!-- on-ens-trobem-->
    <section class="page-section" id="on-ens-trobem">

        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">On ens trobem</h2>
            </div>
        </div>

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-4">
                    <h6>Cal Rohit</h6>
                    <p>Camí de Cal Teixidor, s/n 08589 Sobremunt (Barcelona)</p>
                    <h6>Cal Rohit és una casa rural situada a Sobremunt, al Lluçanès, comarca d’Osona, província de
                        Barcelona.</h6>
                    <h6>Està a una distància de:</h6>
                    <p>90 km de Barcelona 100 km de Girona 180 km de Lleida 185 km de Tarragona</p>
                </div>


                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="iframe-mapa" width="600" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Cam%C3%AD%20de%20Cal%20Teixidor%2C%20s%2Fn%2008589%20Sobremunt%20(Barcelona)&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://www.embedgooglemap.net">google maps iframe</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                    </style>
                </div>

            </div>

        </div>

    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="equip">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">El nostre equip</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.png" alt="" />
                        <h4>Rohit Sandhu</h4>
                        <p class="text-muted">Propietari/Netejador</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.png" alt="" />
                        <h4>Mark Zuckerberg</h4>
                        <p class="text-muted">Personal de manteniment</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.png" alt="" />
                        <h4>Keanu Reeves</h4>
                        <p class="text-muted">Jardiner</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Aquest és el nostre equip el qual s'ocupa de mantenir la casa en perfecte estat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ressenyes -->
    <section class="page-section" id="ressenyes">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ultimes Ressenyes</h2>
                <h3 class="section-subheading text-muted">A continuació hi les ultimes ressenyes poblicades per els nostres clients.</h3>
            </div>
        
            <div class="row">
                
                <div class=" col-lg-4 d-flex justify-content-center">
                    <div class="content text-center">
                        <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                        </div>
                    </div>
                </div>
                
                <div class=" col-lg-4 d-flex justify-content-center">
                    <div class="content text-center">
                        <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-4 d-flex justify-content-center">
                    <div class="content text-center">
                        <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                            <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                        </div>
                    </div>
                </div>
            </div>

                <div style="margin: auto; margin-top: 30px; justify-content-center" >
                    <button type="button" class="btn btn-success btn-mostrar-mes" data-toggle="collapse" data-target="#demo">Veure totes</button>
                    <div id="demo" class="collapse">

                        <div class="row scroll-row">

                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span> 46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span> 46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span> 46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span> 46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-lg-4 d-flex justify-content-center">
                                <div class="content text-center">
                                    <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                        <div class="rating-text scroll-style"> <span>46 ratings & 15 reviews</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright ©Cal Rohit 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Portfolio Modals-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h class="text-uppercase">Entrada a la casa</h>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/1.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Piscina i Jacuzzi</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/2.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">El menjador</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/3.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Cuina</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/4.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Menjador i la sala d'estar</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/5.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Entrada en la casa</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/6.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Sala d'estar amb xemeneia</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/7.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Dormitori amb llit de matrimoni</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/8.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Lavabo</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/9.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Dormitori amb llit de matrimoni</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/10.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Habitació amb 2 llits individuals</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/11.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Dormitori amb llit de matrimoni</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/12.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Sala de jocs</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/13.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Escales al 1r pis</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/14.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Balcó</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/15.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Casa</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/16.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Jardí</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/17.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Casa i l'edifici de la piscina</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/18.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Edifici de la piscina</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/19.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal20" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Piscina i Jacuzzi</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/20.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal21" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h4 class="text-uppercase">Jardí</h4>
                                <img class="img-fluid d-block mx-auto" src="assets/img/imatgesCasa/21.jpg" alt="" />
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Tancar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->

    <script src="js/scripts.js"></script>
</body>

</html>