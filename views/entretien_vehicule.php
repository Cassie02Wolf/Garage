<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Garage V. Parrot</title>
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
    <section id="Présentation" class="container mb-4">
        <div class="row">
            <div class="col-12 text-center p-8">
                <h3 class="font-weight-bold border border-dark p-2">Bienvenue chez Garage V. Parrot</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 p-10">
                <img src="../images/garagiste-1.jpg" class="img-fluid rounded-circle" alt="Garagiste" style="max-width: 450px;">
            </div>
            <div class="col-lg-6">
                <p>
                    Entretien du Véhicule<br>
                    Au Garage V. Parrot, nous comprenons l'importance cruciale de l'entretien régulier pour assurer le bon fonctionnement de votre véhicule. Notre équipe de techniciens qualifiés est dédiée à offrir des services d'entretien complets, contribuant ainsi à la longévité et à la performance optimale de votre voiture.<br>
                    
                    Nos Services d'Entretien Incluent :<br>
                    1. Vidange d'Huile et Remplacement du Filtre :<br>
                    Nous recommandons des vidanges d'huile régulières pour assurer la lubrification adéquate du moteur, prolongeant ainsi sa durée de vie.<br>
                    
                    2. Remplacement des Filtres à Air et à Carburant :<br>
                    Des filtres propres garantissent une qualité d'air optimale pour le moteur et maintiennent un système de carburant efficace.<br>
                    
                    3. Contrôle et Remplacement des Fluides :<br>
                    Nous vérifions et remplaçons les liquides essentiels tels que le liquide de frein, le liquide de refroidissement et le liquide de direction assistée.<br>
                    
                    4. Inspection des Freins et Changement des Plaquettes :<br>
                    Des freins en bon état sont essentiels pour la sécurité. Nous inspectons et remplaçons les plaquettes de frein au besoin.<br>
                    
                    5. Alignement des Roues et Équilibrage :<br>
                    Un alignement correct des roues assure une usure uniforme des pneus, tandis que l'équilibrage garantit une conduite en douceur.<br>
                    
                    6. Diagnostic Électronique :<br>
                    À l'aide d'outils de pointe, nous effectuons un diagnostic électronique pour identifier d'éventuels problèmes électroniques.<br>
                    
                    Pourquoi Choisir Nos Services d'Entretien ?<br>
                    Expertise Technique : Nos techniciens sont hautement qualifiés et formés pour assurer des services d'entretien de qualité.<br>
                    
                    Transparence : Nous croyons en la transparence totale. Vous serez informé de toutes les recommandations avant tout service.<br>
                    
                    Utilisation de Pièces de Qualité : Nous n'utilisons que des pièces de rechange de haute qualité pour garantir la fiabilité de chaque entretien.<br>
                    
                    Service Rapide : Nous comprenons l'importance de votre temps. Notre équipe s'efforce de fournir des services d'entretien rapides sans compromettre la qualité.<br>
                    
                    Confiez-nous l'entretien de votre véhicule, et roulez en toute tranquillité d'esprit. Planifiez votre rendez-vous dès aujourd'hui.<br>
                </p>
            </div>
        </div>
       
    

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