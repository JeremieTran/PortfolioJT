<?php include 'head.html'; ?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Liste</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Accueil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
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
        /* Styles CSS pour le tableau */
        table {
        width: 70%; /* Largeur du tableau */
        border-collapse: collapse;
        margin: 0 auto; /* Centrage du tableau */
        }

        th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        background-color: #3f51b5; /* Couleur de fond pour toutes les cellules */
        color: white; /* Couleur du texte */
        }

        /* Style pour la première colonne */
        th:first-child, td:first-child {
        border-left: 1px solid #fff; /* Bordure gauche */
        font-weight: bold;
        }

        /* Style pour la dernière colonne */
        th:last-child, td:last-child {
        border-right: 1px solid #fff; /* Bordure droite */
        }
        </style>
    <!-- Header End -->

            <body>

            <!-- Tableau avec deux colonnes -->
            <table>
            <thead>
                <tr>
                <td><a href="mission1.php">Mission 1</a></td>
                <th>Maquette Html et CSS d'un site vitrine</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><a href="mission2.php">Mission 2</a></td>
                <td>Création d'une base de donnée SQL</td>
                </tr>
                <tr>
                <td><a href="mission3.php">Mission 3</a></td>
                <td>Container Docker</td>
                </tr>
                <tr>
                <td><a href="mission4.php">Mission 4</a></td>
                <td>Création d'un Portfolio</td>
                </tr>
                <tr>
                <td><a href="mission5.php">Mission 5</a></td>
                <td>Réalisation d'un outil de Ticketing</td>
                </tr>
                <tr>
                <td><a href="mission6.php">Mission 6</a></td>
                <td>Mise en place de GOPHISH</td>
                </tr>
                <tr>
                <td><a href="mission7.php">Mission 7</a></td>
                <td>Mise en place de GLPI sur un serveur Synology/NAS</td>
                </tr>
                <tr>
                <td><a href="mission8.php">Mission 8</a></td>
                <td>Création d'une application d'archivage des tickets CB</td>
                </tr>
                <tr>
                <td><a href="mission9.php">Mission 9</a></td>
                <td>Installation d'un serveur d'administration</td>
                </tr>
                <tr>
                <td><a href="mission10.php">Mission 10</a></td>
                <td>Création d'un Morpion et d'un Pendu Javascript</td>
                </tr>
                <tr>
                <td><a href="projet1.php">Projet 1</a></td>
                <td>Création d'un logiciel de gestion d'un magasin</td>
                </tr>
                <tr>
                <td><a href="projet2.php">Projet 2</a></td>
                <td>Création d'un site de veille avec Laravel</td>
                </tr>
                <tr>
                <td><a href="projet3.php">Projet 3</a></td>
                <td>Création d'une application lourde Visual Studio</td>
                </tr>
                <tr>
                <td><a href="projet4.php">Projet 4</a></td>
                <td>Création d'un simulateur immobilier avec Electron</td>
                </tr>
            </tbody>
            </table>

            </body>



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
                    <h3 class="text-white mb-4">CoorMissions</h3>
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