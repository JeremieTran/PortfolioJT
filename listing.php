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
        font-size: 30px;
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
                <th><a href="mission1.php">Travail 1</a></th>
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
                <th><a href="mission2.php">Travail 2</a></th>
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
                <th><a href="mission3.php">Travail 3</a></th>
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
                <th><a href="mission4.php">Travail 4</a></th>
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
                <th><a href="mission5.php">Travail 5</a></th>
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
                <th><a href="mission6.php">Travail 6</a></th>
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
                <th><a href="mission7.php">Travail 7</a></th>
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
                <th><a href="mission8.php">Travail 8</a></th>
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
                <th><a href="mission9.php">Travail 9</a></th>
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
                <th><a href="mission10.php">Travail 10</a></th>
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

<?php include 'footer.html'; ?>