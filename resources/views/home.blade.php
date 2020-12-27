<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eco-Cleany</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/logooo.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <style type="text/css">
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <header id="header">

        <div id="topbar">
            <div class="container">
                <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="logo float-left">
                <h1 class="text-light"><a href="#intro" class="scrollto"><span style="color: black;">Eco-Cleany</span></a></h1>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#pr">Produits</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">Qui sommes-nous</a></li>
                    <li><a href="#team">Groupe</a></li>

                    <li><a href="#footer">Contactez-nous</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->
    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">


            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <!-- <h2 style="margin-top: 150px; margin-right: 100px;">Rapid Solutions<br>for <span>You!</span></h2>-->

                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <!-- <img src="img/logo.png" alt="" class="img-fluid" style="height: 380px; width:900px;  margin-top: 100px;  margin-left: 200px;">-->
                </div>
            </div>

        </div>
    </section><!-- #intro -->
    <main id="main">
        <section id="pr" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 style="margin-bottom: 100px;">Produits</h3>
                </header>

                <div class="row">
                    @foreach ($produits as $produit)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow bounceInUp" data-wow-duration="1.4s">
                            <div class="box">
                                <div class="icon" style="background: #fceef3;"></div>
                                <h4 class="title"><a href="">{{$produit->nom}}</a></h4>
                                <p class="description">
                                    <img src="{{$produit->image_produit}}" style="height:250px;width:272px; " class="center">
                                    <br><b style="color: #413e66 ;">
                                        Contenance :</b> {{$produit->contenance}} <br>
                                    <b style="color: #413e66 ;">Prix :</b> {{$produit->prix}} DH <br>
                                    <b> Description :</b> {{$produit->description}}
                                    <br>
                                </p>
                                <a href="/commander/{{$produit->id}}" style="text-align: right; margin-top: 5px;" 
                                class="btn btn-light">Commander</a>

                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 style="margin-bottom: 100px;">Service</h3>
                </header>

                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #fceef3;"></div>
                            <h4 class="title"><a href="">{{$service->nom}}</a></h4>
                            <p class="description">
                                <img src="{{$service->image_service}}" style="height:250px;width:272px; " class="center">
                                <br />
                                <b style="color: #413e66 ;">Prix :</b> {{$service->prix}} DH <br>
                                <b> Description :</b> {{$service->description}}
                                <br>
                            </p>
                            <a href="/resrever/{{$service->id}}" style="text-align: right; margin-top: 5px;" 
                                class="btn btn-light">Reserver</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section id="about">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('img/n.jpeg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                            <h2>Qui sommes-nous ?</h2>

                            <p>ECOCLEANY est une entreprise marocaine offrant à ses clients des produits de
                                nettoyage 100% écologiques composés d’ingrédients naturels, ils aident à préserver
                                la nature tout en étant performants et respectueux de l’utilisateur, ils ne sont pas
                                irritants pour la peau et ne causeront pas des allergies.</p>


                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->
        <section id="team" class="section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>Team</h3>
                </div>
                <div class="row">
                    <div class="col wow fadeInUp">
                        <div class="member" style="width:300px ;height:300px; ">
                            <img src="img/t0.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>LAZRAK Loubna</h4>
                                    <span>Responsable financier</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col wow fadeInUp">
                        <div class="member" style="width:300px ;height:300px; ">
                            <img src="img/t1.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>KARIM Nouha</h4>
                                    <span>Responsable commerciale</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member" style="width:300px ;height:300px; ">
                            <img src="img/t2.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>BEN MOUSSA Douae</h4>
                                    <span>Responsable logistique</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member" style="width:300px ;height:300px; margin-left: 130px;">
                            <img src="img/t3.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>MOUDDAHI Oussama</h4>
                                    <span>Directeur général</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member" style="width:300px ;height:300px; ">
                            <img src="img/t4.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>AOULAD BEN ALI Intissar</h4>
                                    <span>Responsable RH</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #team -->
    </main>
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="footer-info">
                                    <h3>ECOCLEANY</h3>
                                    <p>Notre service client est là pour vous répondre du Lundi au Samedi de 9h à
                                        19h</p>
                                </div>



                            </div>


                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Contactez-nous</h4>
                                    <p>
                                        A108 Adam Rue <br>
                                        TETOUANE <br>
                                        MAROC <br>
                                        <strong>Phone:</strong> 06-58-95-54-88<br>
                                        <strong>Email:</strong> eco.cleany.maroc@gmail.com<br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>ECOCLEANY</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->

            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>