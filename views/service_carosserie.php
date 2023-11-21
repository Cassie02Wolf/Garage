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
            <img src="../images/logo.png" class="img-fluid w-100" alt="Logo">
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
                    <h3 class="font-weight-bold border border-dark p-2">Réparation carrosserie</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-10">
                    <img src="../images/carosserie-1.jpg" class="img-fluid rounded-circle" alt="Garagiste" style="max-width: 450px;">
                </div>
                <div class="col-lg-6">
                    <p>
                        À Garage V. Parrot, nous comprenons que la carrosserie de votre véhicule est bien plus qu'une simple enveloppe extérieure. Elle reflète votre style, assure la sécurité, et contribue à l'expérience globale de conduite. C'est pourquoi notre équipe dédiée de professionnels de la carrosserie est là pour prendre soin de votre voiture avec le plus grand soin et savoir-faire.
                    </p>
                    <p>
                        Que votre véhicule ait subi des éraflures légères, des bosses disgracieuses, ou des dommages plus importants, notre équipe est équipée pour restaurer sa carrosserie à son état d'origine. Nous combinons une expertise approfondie avec des techniques modernes et des équipements de pointe pour garantir des résultats exceptionnels.
                    </p>
                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <img src="../images/carosserie-2.jpg" class="img-fluid rounded-circle" alt="Garagiste2" style="max-width: 450px;">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <p>
                        Notre engagement envers la qualité signifie que chaque réparation est effectuée avec précision et minutie. Nous comprenons l'importance de votre véhicule, et nous travaillons dans les délais convenus pour minimiser les désagréments. Chez Garage V. Parrot, votre satisfaction est notre priorité, et nous sommes fiers de redonner à votre voiture son allure exceptionnelle.
                    </p>
                </div>
            </div>
        </section>
        <section class="container-fluid mt-8">
            <div class="row">
                <div classe="col-12">
                    <h3 class="font-weight-bold border border-dark p-2 text-center">Réparation prise en charge</h3>
                    <p>
                        <strong>Réparation de bosses :</strong> Élimination des bosses et des impacts sur la carrosserie sans endommager la peinture.<br>

                        <strong>Peinture et retouche :</strong> Application de peinture pour restaurer l'apparence d'origine de la carrosserie et retouche des éclats et éraflures.<br>
                    
                        <strong>Réparation des éraflures et rayures :</strong> Correction des éraflures légères et des rayures superficielles.<br>
                    
                        <strong>Remplacement de pare-chocs :</strong> Remplacement des pare-chocs endommagés ou fissurés.<br>
                    
                        <strong>Réparation des impacts de grêle :</strong> Correction des impacts de grêle sans endommager la peinture.<br>
                    
                        <strong>Réparation de la rouille :</strong> Traitement et réparation des zones rouillées pour éviter la propagation de la corrosion.<br>
                    
                        <strong>Réparation des impacts de pierres :</strong> Correction des dommages causés par les impacts de pierres sur la carrosserie.<br>
                    
                        <strong>Réparation des fissures de pare-brise :</strong> Réparation des fissures ou remplacement du pare-brise en cas de dommages importants.<br>
                    
                        <strong>Réparation des éclats de peinture :</strong> Correction des éclats de peinture causés par des graviers ou autres objets.<br>
                    
                        <strong> Réalignement structurel :</strong> Réparation des déformations structurelles de la carrosserie après un accident.<br>
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