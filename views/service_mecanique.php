<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Garage V. Parrot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- En-tête -->
<!-- En-tête -->
<header class="container-fluid position-relative">
    <div class="row">
        <div class="col-12 position-relative">
            <img src="./images/logo.png" class="img-fluid w-100" alt="Logo">
            <a href="#connexion" class="btn btn-primary fixed-connexion fixed-connexion-btn">Connexion</a>
        </div>
    </div>
</header>



    <!--Navigation-->
    <nav class="container-fluid">
        <ul class="row text-center justify-content-center">
            <li class="col-2"><a href="../index.php">Présentation</a></li>
            <li class="col-auto dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nos Services
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item border" href="./service_carosserie.php">Réparation Carrosserie</a>
                    <a class="dropdown-item border" href="./service_mecanique.php">Réparation Mécanique</a>
                    <a class="dropdown-item border" href="./entretien_vehicule.php">Entretien du véhicule</a>
                </div>
            </li>
            <li class="col-auto dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="voituresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Voitures d'Occasion
                </a>
                <div class="dropdown-menu" aria-labelledby="voituresDropdown">
                    <a class="dropdown-item border" href="#recherche">Recherche</a>
                    <a class="dropdown-item border" href="#notreSelection">Notre Sélection</a>
                    <a class="dropdown-item border" href="./vehicule_occasion.php">Nos Annonces</a>
                </div>
            </li>
            <li class="col-2"><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!--Contenue-->
    <main> 
        <section class="container mb-4">
            <div class="row">
                <div class="col-12 text-center p-8">
                    <h3 class="font-weight-bold border border-dark p-2">Réparation mécanique</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-10">
                    <img src="../images/mecanique-1.jpg" class="img-fluid rounded-circle" alt="Garagiste" style="max-width: 450px;">
                </div>
                <div class="col-lg-6">
                    <p>
                        Notre équipe dévouée de techniciens qualifiés est prête à prendre en charge toutes vos réparations mécaniques avec expertise et professionnalisme.
                        Des Services Complets pour Votre Tranquillité d'Esprit,que votre voiture nécessite une réparation complexe du moteur, une révision de routine, ou la résolution de problèmes mécaniques spécifiques, nous mettons à votre disposition une gamme complète de services. Nous sommes équipés des dernières technologies et outils de diagnostic pour identifier rapidement les problèmes et effectuer les réparations nécessaires.
                        Notre engagement envers l'excellence se reflète dans chaque réparation que nous entreprenons. Nous croyons en la transparence, vous tenant informé à chaque étape du processus de réparation. De plus, nous nous efforçons de fournir un service rapide sans compromettre la qualité, afin que vous puissiez retrouver la route en toute confiance.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <img src="../images/mecanique-2.jpg" class="img-fluid rounded-circle" alt="Garagiste2" style="max-width: 450px;">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <p>
                        Nous n'utilisons que des pièces de qualité et nous assurons que chaque réparation est effectuée avec précision. Que ce soit pour des problèmes de transmission, de freins, de suspension, ou d'autres composants mécaniques, nous sommes là pour vous offrir des solutions fiables et durables.
                        N'attendez pas que les problèmes mécaniques s'aggravent. Confiez votre véhicule aux experts du Garage V. Parrot pour des réparations mécaniques exceptionnelles. Planifiez dès aujourd'hui votre rendez-vous et laissez-nous prendre soin de votre voiture comme si elle était la nôtre.
                    </p>
                </div>
            </div>
        </section>
        <section class="container-fluid mt-8">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-weight-bold border border-dark p-2 text-center">Réparation prise en charge</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        <strong>Réparation du Moteur :</strong><br>
                        Diagnostic et résolution des problèmes moteur.<br>
                        Remplacement des joints et des pièces défectueuses.<br>
                        Reconstruction ou remplacement du moteur.<br>

                        <strong>Système de Freinage :</strong><br>
                        Remplacement des plaquettes de freins.<br>
                        Réparation ou remplacement des disques de frein.<br>
                        Purge du liquide de frein.<br>

                        <strong>Système de Transmission :</strong><br>
                        Réparation de la transmission automatique ou manuelle.<br>
                        Remplacement de l'embrayage.<br>
                        Diagnostic et résolution des problèmes de transmission.<br>

                        <strong>Suspension et Direction :</strong><br>
                        Réparation ou remplacement des amortisseurs et des ressorts.<br>
                        Alignement des roues.<br>
                        Réparation des composants de la direction.<br>

                        <strong>Système d'Échappement :</strong><br>
                        Réparation des fuites d'échappement.<br>
                        Remplacement du pot d'échappement.<br>
                        Diagnostic des problèmes liés au système d'échappement.<br>
                    </p>
                </div>
                <div class="col-6">
                    <p>
                        <strong>Climatisation et Chauffage :</strong><br>
                        Réparation du système de climatisation.<br>
                        Diagnostic et résolution des problèmes de chauffage.<br>
                        Recharge du réfrigérant.<br>

                        <strong>Électricité Automobile :</strong><br>
                        Diagnostic et réparation du système électrique.<br>
                        Remplacement des batteries.<br>
                        Réparation des problèmes liés à l'éclairage.<br>

                        <strong>Système de Refroidissement :</strong><br>
                        Réparation des fuites du radiateur.<br>
                        Remplacement du thermostat.<br>
                        Diagnostic et résolution des problèmes de surchauffe.<br>

                        <strong>Entretien Préventif :</strong><br>
                        Vidange d'huile et remplacement du filtre.<br>
                        Remplacement des bougies d'allumage.<br>
                        Contrôle et remplacement des fluides.<br>

                        <strong>Diagnostic Électronique :</strong><br>
                        Utilisation d'outils de diagnostic avancés.<br>
                        Lecture des codes d'erreur électroniques.<br>
                        Résolution des problèmes liés à l'électronique embarquée.
                    </p>
                </div>
            </div>
        </section>
    </main>
    

    <!-- Pied de page -->
    <footer class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex flex-column">
                <h6 class="my-auto"><strong>Horaires d'ouverture</strong></h6>
                <p class="my-auto">
                    Lundi : 08h45-12h00 / 14h00-18h00<br>
                    Mardi : 08h45-12h00 / 14h00-18h00<br>
                    Mercredi : 08h45-12h00 / 14h00-18h00<br>
                    Jeudi : 08h45-12h00 / 14h00-18h00<br>
                    Vendredi : 08h45-12h00 / 14h00-18h00<br>
                    Samedi : 08h45-12h00<br>
                    Dimanche : Fermé
                </p>
            </div>
        <div class="col-6 my-auto">
            <h6><strong>Nous contacter</strong></h6>
            <p>
                Par e-mail: contact.garageVParrot@hotmail.fr<br>
                Par téléphone : 03.23.78.55.21
            </p>
        </div>
    </div>
</footer>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>