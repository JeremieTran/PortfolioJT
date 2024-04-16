<?php include 'head.html'; ?>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Répertoire</h1>
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
        width: 90%; /* Largeur du tableau */
        border-collapse: collapse;
        margin: 0 auto; /* Centrage du tableau */
        }

        th {
        padding: 8px;
        font-size: 15px; /* Réduire la taille de la police */
        text-align: center;
        border-bottom: 1px solid #ddd;
        background-color: #3f51b5; /* Couleur de fond pour toutes les cellules */
        color: white; /* Couleur du texte */
        }
        td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        background-color: #3f51b5; /* Couleur de fond pour toutes les cellules */
        color: white; /* Couleur du texte */
        font-size: 12px; /* Réduire la taille de la police */
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
        .tableausynthese {
        text-align: center;
        background-color: #228B22;
        border-radius: 10px;
        width:40%;
        margin-right: 30%;
        margin-left: 30%;
        }
        </style>
    <!-- Header End -->

            <body>
            <h1 class="tableausynthese"><a href="img/Tableaudesynthese.pdf" target="_blank"> > Annexe 6-1 Tableau de synthèse < </a></h1>
            <h4 class="text-white display-4"> Blank </h4>
            <!-- Tableau avec deux colonnes -->
            <table>
            <thead>
                <tr>
                <th>Travaux</th>
                <th>Libellés</th>
                <th>Compétences</th>
                <th>Sous-Compétences</th>
                </tr>
            </thead>
            <tbody>
                <!-- Début Mission 1 -->
                <tr>
                <th><a href="mission1.php">Mission 1</a></th>
                <th><a href="mission1.php">Maquette Html et CSS d'un site vitrine</a></th>
                <th>
                    ▸ Développer la présence en ligne de l’organisation</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques </br>
                    ▸ Référencer les services en ligne de l’organisation et mesurer leur visibilité. </br>
                    ▸ Participer à l’évolution d’un site Web exploitant les données de l’organisation. </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 1 -->
                <!-- Début Mission 2 -->
                <tr>
                <th><a href="mission2.php">Mission 2</a></th>
                <th><a href="mission2.php">Création d'une base de donnée en MySql</a></th>
                <th>
                    ▸ Gérer le patrimoine informatique</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Mettre en place et vérifier les niveaux d’habilitation associés à un service </br>
                    ▸ Gérer des sauvegardes </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 2 -->
                <!-- Début Mission 3 -->
                <tr>
                <th><a href="mission3.php">Mission 3</a></th>
                <th><a href="mission3.php">Container Docker</a></th>
                <th>
                    ▸ Gérer le patrimoine informatique</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                </th>
                <td>
                    ▸ Recenser et identifier les ressources numériques  </br>
                    ▸ Mettre en place et vérifier les niveaux d’habilitation associés à un service </br>
                    ▸ Gérer des sauvegardes </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                </td>
                </tr>
                <!-- Fin Mission 3 -->
                <!-- Début Mission 4 -->
                <tr>
                <th><a href="mission4.php">Mission 4</a></th>
                <th><a href="mission4.php">Création d'un Portfolio</a></th>
                <th>
                    ▸ Développer la présence en ligne de l’organisation</br>
                    </br>
                    ▸ Organiser son développement professionnel
                </th>
                <td>
                    ▸ Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques </br>
                    ▸ Référencer les services en ligne de l’organisation et mesurer leur visibilité. </br>
                    ▸ Participer à l’évolution d’un site Web exploitant les données de l’organisation. </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 4 -->
                <!-- Début Mission 5 -->
                <tr>
                <th><a href="mission5.php">Mission 5</a></th>
                <th><a href="mission5.php">Réalisation d'un outil de ticketing via les outils microsoft</a></th>
                <th>
                    ▸ Gérer le patrimoine informatique</br>
                    </br>
                    ▸ Répondre aux incidents et aux demandes d’assistance et d’évolution</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                </th>
                <td>
                    ▸ Recenser et identifier les ressources numériques  </br>
                    ▸ Mettre en place et vérifier les niveaux d’habilitation associés à un service </br>
                    ▸ Vérifier les conditions de la continuité d’un service informatique </br>
                    ▸ Gérer des sauvegardes </br>
                    </br>
                    ▸ Collecter, suivre et orienter des demandes </br>
                    ▸ Traiter des demandes concernant les services réseau et système, applicatifs </br>
                    ▸ Traiter des demandes concernant les applications </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                </td>
                </tr>
                <!-- Fin Mission 5 -->
                <!-- Début Mission 6 -->
                <tr>
                <th><a href="mission6.php">Mission 6</a></th>
                <th><a href="mission6.php">Mise en place de GOPHISH</a></th>
                <th>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 6 -->
                <!-- Début Mission 7 -->
                <tr>
                <th><a href="mission7.php">Mission 7</a></th>
                <th><a href="mission7.php">Mise en place de GLPI sur un serveur AWS</a></th>
                <th>
                    ▸ Gérer le patrimoine informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Recenser et identifier les ressources numériques  </br>
                    ▸ Mettre en place et vérifier les niveaux d’habilitation associés à un service </br>
                    ▸ Vérifier les conditions de la continuité d’un service informatique </br>
                    ▸ Gérer des sauvegardes </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 7 -->
                <!-- Début Mission 8 -->
                <tr>
                <th><a href="mission8.php">Mission 8</a></th>
                <th><a href="mission8.php">Création d'une application lourde Visual Studio</a></th>
                <th>
                    ▸ Travailler en mode projet</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Analyser les objectifs et les modalités d’organisation d’un projet </br>
                    ▸ Planifier les activités </br>
                    ▸ Évaluer les indicateurs de suivi d’un projet et analyser les écarts </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 8 -->
                <!-- Début Mission 9 -->
                <tr>
                <th><a href="mission9.php">Mission 9</a></th>
                <th><a href="mission9.php">Installation d'un serveur d'administration</a></th>
                <th>
                    ▸ Gérer le patrimoine informatique</br>
                    </br>
                    ▸ Travailler en mode projet</br>
                </th>
                <td>
                    ▸ Recenser et identifier les ressources numériques  </br>
                    ▸ Mettre en place et vérifier les niveaux d’habilitation associés à un service </br>
                    ▸ Vérifier les conditions de la continuité d’un service informatique </br>
                    ▸ Gérer des sauvegardes </br>
                    ▸ Vérifier le respect des règles d’utilisation des ressources numériques </br>
                    </br>
                    ▸ Analyser les objectifs et les modalités d’organisation d’un projet </br>
                    ▸ Planifier les activités </br>
                    ▸ Évaluer les indicateurs de suivi d’un projet et analyser les écarts </br>
                </td>
                </tr>
                <!-- Fin Mission 9 -->
                <!-- Début Mission 10 -->
                <tr>
                <th><a href="mission10.php">Mission 10</a></th>
                <th><a href="mission10.php">Création d'un générateur de MPD Javascript</a></th>
                <th>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Travailler en mode projet</br>
                </th>
                <td>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Gérer son identité professionnelle </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Fin Mission 10 -->
                <!-- Projet 1 -->
                <tr>
                <th><a href="projet1.php">Projet 1</a></th>
                <th><a href="projet1.php">Création d'un logiciel de gestion d'un magasin</a></th>
                <th>
                    ▸ Travailler en mode projet</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Projet 1 -->
                <!-- Projet 2 -->
                <tr>
                <th><a href="projet2.php">Projet 2</a></th>
                <th><a href="projet2.php">Création d'un site de veille avec Laravel</a></th>
                <th>
                    ▸ Travailler en mode projet</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Analyser les objectifs et les modalités d’organisation d’un projet </br>
                    ▸ Planifier les activités </br>
                    ▸ Évaluer les indicateurs de suivi d’un projet et analyser les écarts </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Projet 2 -->
                <!-- Projet 3 -->
                <tr>
                <th><a href="projet3.php">Projet 3<a></th>
                <th><a href="projet3.php">Création d'une application Tickets CB Power App</a></th>
                <th>
                    ▸ Travailler en mode projet</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Analyser les objectifs et les modalités d’organisation d’un projet </br>
                    ▸ Planifier les activités </br>
                    ▸ Évaluer les indicateurs de suivi d’un projet et analyser les écarts </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Projet 3 -->
                <!-- Projet 4 -->
                <tr>
                <th><a href="projet4.php">Projet 4</a></th>
                <th><a href="projet4.php">Création d'un simulateur immobilier avec Electron</a></th>
                <th>
                    ▸ Travailler en mode projet</br>
                    </br>
                    ▸ Mettre à disposition des utilisateurs un service informatique</br>
                    </br>
                    ▸ Organiser son développement professionnel</br>
                </th>
                <td>
                    ▸ Analyser les objectifs et les modalités d’organisation d’un projet </br>
                    ▸ Planifier les activités </br>
                    ▸ Évaluer les indicateurs de suivi d’un projet et analyser les écarts </br>
                    </br>
                    ▸ Réaliser les tests d’intégration et d’acceptation d’un service </br>
                    ▸ Déployer un service </br>
                    ▸ Accompagner les utilisateurs dans la mise en place d’un service </br>
                    </br>
                    ▸ Mettre en place son environnement d’apprentissage personnel </br>
                    ▸ Développer son projet professionnel </br>
                </td>
                </tr>
                <!-- Projet 4 -->
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