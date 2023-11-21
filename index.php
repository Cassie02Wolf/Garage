<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Garage V. Parrot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- En-tête -->
<header class="container-fluid position-relative">
    <div class="row">
        <div class="col-12 position-relative">
            <img src="./images/logo.png" class="img-fluid w-100" alt="Logo">
            <button onclick="afficherFormulaire()" class="btn btn-primary fixed-connexion fixed-connexion-btn">Connexion</button>
        </div>
    </div>
</header>

<!-- Formulaire de connexion avec style="display: none;" pour le cacher initialement -->
<section id="connexion" class="container mb-4" style="display: none;">
    <div class="row">
        <div class="col-12 text-center p-8">
            <h3 class="font-weight-bold border border-dark p-2">Connexion</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form id="formConnexion" action="./views/connexion.php" method="POST">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <button type="button" onclick="cacherFormulaire()" class="btn btn-secondary">Retour</button>
            </form>
        </div>
    </div>
</section>

<script>
    // Fonction pour afficher le formulaire lors du clic sur le bouton "Connexion"
    function afficherFormulaire() {
        var formulaire = document.getElementById('connexion');
        formulaire.style.display = 'block';
    }

    // Fonction pour cacher le formulaire lors du clic sur le bouton "Retour"
    function cacherFormulaire() {
        var formulaire = document.getElementById('connexion');
        formulaire.style.display = 'none';
    }
    $(document).ready(function () {
        // Remplacez "votre_email" et "votre_mot_de_passe" par les valeurs que vous souhaitez tester
        var email = "Parrot-Vincent@hotmail.fr";
        var mdp = "123456";

        $.ajax({
            type: "POST",
            url: "connexion.php",
            data: {email: email, mdp: mdp},
            success: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.error("Erreur AJAX : " + error);
            }
        });
    });
</script>





    <!--Navigation-->
    <nav class="container-fluid">
        <ul class="row text-center justify-content-center">
            <li class="col-2"><a href="./index.php">Présentation</a></li>
            <li class="col-auto dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nos Services
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item border" href="./views/service_carosserie.php">Réparation Carrosserie</a>
                    <a class="dropdown-item border" href="./views/service_mecanique.php">Réparation Mécanique</a>
                    <a class="dropdown-item border" href="./views/entretien_vehicule.php">Entretien du véhicule</a>
                </div>
            </li>
            <li class="col-auto dropdown">
                <a class="nav-link dropdown-toggle" href="." id="voituresDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Voitures d'Occasion
                </a>
                <div class="dropdown-menu" aria-labelledby="voituresDropdown">
                    <a class="dropdown-item border" href="#recherche">Recherche</a>
                    <a class="dropdown-item border" href="#notreSelection">Notre Sélection</a>
                    <a class="dropdown-item border" href="./views/vehicule_occasion.php">Nos Annonces</a>
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
                <img src="./images/garagiste-1.jpg" class="img-fluid rounded-circle" alt="Garagiste" style="max-width: 450px;">
            </div>
            <div class="col-lg-6">
                <p>
                    L'adresse incontournable à Toulouse pour tous vos besoins en réparation automobile et bien plus encore.<br> Fondé en 2021 par Vincent Parrot, un expert cumulant 15 années d'expérience dans le domaine, notre garage s'est rapidement établi comme un acteur majeur de la région.<br>
                    Depuis nos débuts, nous nous engageons à offrir des services de qualité exceptionnelle, couvrant la réparation approfondie de la carrosserie et de la mécanique, ainsi que l'entretien régulier pour garantir la performance et la sécurité de votre véhicule.<br> Notre équipe dévouée, sous la direction avisée de Vincent Parrot lui-même, travaille avec précision et passion pour assurer que chaque voiture qui entre dans notre atelier soit traitée avec le plus grand soin.<br>
                    En plus de nos services de réparation et d'entretien, le Garage V. Parrot propose une sélection soigneusement choisie de véhicules d'occasion à la vente.<br> Nous croyons en la transparence et l'intégrité dans toutes nos transactions, offrant ainsi à nos clients une opportunité unique d'acquérir des voitures de qualité.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <img src="./images/garagiste-2.jpg" class="img-fluid rounded-circle" alt="Garagiste2" style="max-width: 450px;">
            </div>
            <div class="col-lg-6 order-lg-1">
                <p>
                    Vincent Parrot considère son garage comme une extension de la confiance que ses clients lui accordent.<br> Chaque voiture est traitée comme si elle appartenait à notre propre famille, car nous comprenons l'importance d'avoir un véhicule fiable et performant.<br>
                    Convaincu que notre engagement envers la qualité mérite d'être partagé avec une audience plus large, Vincent Parrot a décidé de renforcer sa présence en ligne.<br> C'est dans cette optique qu'il a fait appel à votre agence de création de sites web, et nous sommes ravis de collaborer à la réalisation de cette vitrine virtuelle.<br>
                    Explorez notre site pour en savoir plus sur les services exceptionnels que propose le Garage V. Parrot.<br> Nous sommes impatients de vous accueillir et de prendre soin de votre véhicule comme si c'était le nôtre.
                </p>
            </div>
        </div>
       
    </section>
    

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




    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>

