<?php include 'head.html'; ?>
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Le BTS SIO</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Accueil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Veille Technologique</p>
            </div>
            <!-- <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <style>
        .veille{
            width: 70%;
            margin-bottom: 10%;
            border-radius: 10px;
        }
        .article{
            width: 45%;
            height: auto;
            margin-right: 2%;
            /* border: 2px solid #228B22; */
        }
        .imgveille{
            margin-right: 25%;
            width: 50%;
            margin-left: 25%;
        }
        .dateveille{
            color: black;
        }
        .hveille{
            text-align: justify;
            padding: 5%;
        }
    </style>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Présentation</h6>
                            <h1 class="display-4">Veille Technologique</h1>
                        </div>
                        <img class="veille" src="img/veille.jpg" alt="Image">
                        <h2 class="mb-3">Les principaux outils de ma veille</h2>
                        <p style="text-align: justify;"> J'ai effectué ma veille technologique grace aux alertes par mail via "Google Alerts" ainsi qu'avec un agrégateur de flux RSS créé en cours qui se nomme VeilleRSS et qui est en format web.
                            En plus des informations fournis chaque semaine/mois, j'ai quelques sites en favoris permettant de me tenir au courant des derniéres actualités tel que lemondedelinformatique.fr/intelligence-artificielle qui est un site internet regroupant l’actualité sur l'IA.
                        </p>
                        <h2 class="mb-3">Sujet de ma veille</h2>
                        <p style="text-align: justify;"> Pour la veille techologique, j'ai décidé de traiter sur le sujet de l'Intelligence Artificielle et de son évolution. 
                        Pour cela , je recherche les articles en lien avec le constat de L'IA et ce qu'elle est amenée à devenir.
                        </p>
                    </div>
                    <!-- Courses Start -->
                        <div class="container-fluid py-5">
                            <div class="container py-5">
                                <div class="row">
                                    <div class="article">
                                        <a class="d-block overflow-hidden mb-2" href="https://www.vie-publique.fr/eclairage/18495-le-developpement-de-lintelligence-artificielle-risque-ou-opportunite">
                                            <img class="imgveille" src="img/veille1.jpg" alt="">
                                            <div class="articlecontent">
                                                <h4 class="text-center text-black px-3">Le développement de l'intelligence artificielle : risque ou opportunité ?</h4>
                                                <h6 class="hveille"style="text-align: justify;">L'intelligence artificielle n'est plus un thème d'anticipation pour amateurs de science fiction. Elle s'est installée depuis une dizaine d'année dans de nombreux secteurs d'activité : industrie, administrations, santé, services, commerce... 
                                                dans la continuité de l'ère de la digitalisation entamée dans les années 2000.
                                                </h6>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="dateveille">www.vie-publique.fr</span>
                                                        <span class="dateveille">23 août 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="article">
                                        <a class="d-block overflow-hidden mb-2" href="https://tool-advisor.fr/blog/statistiques-intelligence-artificielle-ia/#chiffre">
                                            <img class="imgveille" src="img/veille2.jpg" alt="">
                                            <div class="articlecontent">
                                                <h4 class="text-center text-black px-3">12 statistiques sur l’intelligence artificielle en 2023-2024</h4>
                                                <h6 class="hveille"style="text-align: justify;">Dans la jungle des données et des statistiques liées à l'intelligence artificielle, certaines se démarquent tels que les chiffres clés 
                                                sur le potentiel en terme de miliards de dollars, ou le nombre de postes que l'IA pourrait affecter à l'avenir, aussi bien au niveau de la demande que des remplacements.
                                                </h6>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="dateveille">www.tool-advisor.fr</span>
                                                        <span class="dateveille">20 novembre 2023</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="article">
                                        <a class="d-block overflow-hidden mb-2" href="https://www.liberation.fr/economie/economie-numerique/openai-et-meta-annoncent-le-lancement-de-leurs-intelligences-artificielles-capables-de-raisonner-20240410_FTBPXGC4NFGG3D5J2L6XX4PNXI/">
                                            <img class="imgveille" src="img/veille3.jpg" alt="">
                                            <div class="articlecontent">
                                                <h4 class="text-center text-black px-3">L'intelligence artificielle capables de «raisonner»</h4>
                                                <h6 class="hveille"style="text-align: justify;">Dans la course à l’IA, OpenAI et Meta misent désormais sur des modèles capables de «réflexion», 
                                                leur permettant par la même occasion de mener des tâches plus compliquées comme planifier et de réserver les différentes étapes d’un voyage.
                                                </h6>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="dateveille">www.liberation.fr</span>
                                                        <span class="dateveille">10 avril 2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="article">
                                        <a class="d-block overflow-hidden mb-2" href="https://atlantico.fr/article/decryptage/intelligence-artificielle-tuteur-de-chatbot-la-profession-qui-va-recruter-a-tour-de-bras-laurent-alexandre">
                                            <img class="imgveille" src="img/veille4.jpg" alt="">
                                            <div class="articlecontent">
                                                <h4 class="text-center text-black px-3">Intelligence artificielle : tuteur de Chatbot</h4>
                                                <h6 class="hveille"style="text-align: justify;">C'est LA profession qui va recruter. Les entreprises des nouvelles technologies dans le domaine de l’IA ont besoin 
                                                de personnes qui interagissent et qui occupent le rôle de tuteur vis-à-vis de l’intelligence artificielle.
                                                </h6>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="dateveille">www.atlantico.fr</span>
                                                        <span class="dateveille">12 avril 2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 pb-4">
                                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                                            <img class="img-fluid" src="img/courses-5.jpg" alt="">
                                            <div class="courses-text">
                                                <h4 class="text-center text-white px-3">Web design & development courses for
                                                    beginners</h4>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                                            <small>(250)</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 pb-4">
                                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                                            <img class="img-fluid" src="img/courses-6.jpg" alt="">
                                            <div class="courses-text">
                                                <h4 class="text-center text-white px-3">Web design & development courses for
                                                    beginners</h4>
                                                <div class="border-top w-100 mt-3">
                                                    <div class="d-flex justify-content-between p-4">
                                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                                            <small>(250)</small></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                         </div>
                    <!-- Courses End -->

                    
                    <!-- <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="detail.html">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">Web design & development courses for
                                    beginners</h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5
                                            <small>(250)</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->
               </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="bg-primary mb-5 py-3">
                        <h3 class="text-white py-3 px-4 m-0">Chiffres Clés de l'IA</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Marché mondial 2023 Milliards $</h6>
                            <h6 class="text-white my-3">196</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Investissement à 2030 billion $</h6>
                            <h6 class="text-white my-3">1.81</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Présence en entreprise</h6>
                            <h6 class="text-white my-3">58%</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Emplois remplacés par L'IA</h6>
                            <h6 class="text-white my-3">16%</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">Documents scientifiques</h6>
                            <h6 class="text-white my-3">288 000</h6>
                        </div>
                        <div class="d-flex justify-content-between px-4">
                            <h6 class="text-white my-3">Emplois d'ici 2033 Millions</h6>
                            <h6 class="text-white my-3">500</h6>
                        </div>
                        <!-- <h5 class="text-white py-3 px-4 m-0">Course Price: $199</h5>
                        <div class="py-3 px-4">
                            <a class="btn btn-block btn-secondary py-3 px-5" href="">Enroll Now</a>
                        </div> -->
                    </div>
                    

                    <!-- <div class="mb-5">
                        <h2 class="mb-3">Categories</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Design</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Development</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Online Marketing</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Keyword Research</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Email Marketing</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div> -->

                    <!-- <div class="mb-5">
                        <h2 class="mb-4">Recent Courses</h2>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-4" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none" href="">
                            <img class="img-fluid rounded" src="img/courses-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6>Web design & development courses for beginners</h6>
                                <div class="d-flex">
                                    <small class="text-body mr-3"><i class="fa fa-user text-primary mr-2"></i>Jhon Doe</small>
                                    <small class="text-body"><i class="fa fa-star text-primary mr-2"></i>4.5 (250)</small>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Portfolio</h1>
                    </a>
                    <!-- <p class="m-0">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p> -->
                </div>
                <!-- <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Coordonnées</h3>
                    <!-- <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p> -->
                    <p><i class="fa fa-phone-alt mr-2"></i>06 52 43 45 69</p>
                    <p><i class="fa fa-envelope mr-2"></i>jeremie.tran@espl.org</p>
                    <div class="d-flex justify-content-start mt-4">
                        <!-- <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a> -->
                        <!-- <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a> -->
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <!-- <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Our Courses</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                    </div>
                </div> -->
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Liens</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                        <a class="text-white-50 mb-2" href="index.html#presentation"><i class="fa fa-angle-right mr-2"></i>Présentation</a>
                        <a class="text-white-50 mb-2" href="index.html#environnement"><i class="fa fa-angle-right mr-2"></i>Environnement</a>
                        <a class="text-white-50 mb-2" href="index.html#Projets"><i class="fa fa-angle-right mr-2"></i>Projets</a>
                        <!-- <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Your Site Name</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>