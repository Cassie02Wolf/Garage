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
<header class="container-fluid position-relative">
    <div class="row">
        <div class="col-12 position-relative">
            <img src="../images/logo.png" class="img-fluid w-100" alt="Logo">
            <button onclick="afficherFormulaire()" class="btn btn-primary fixed-connexion fixed-connexion-btn">Connexion</button>
        </div>
    </div>
</header>

<!-- Ajoutez le formulaire de connexion avec style="display: none;" pour le cacher initialement -->
<section id="connexion" class="container mb-4" style="display: none;">
    <div class="row">
        <div class="col-12 text-center p-8">
            <h3 class="font-weight-bold border border-dark p-2">Connexion</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <form id="formConnexion" action="connexion.php" method="post">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="motDePasse">Mot de passe :</label>
                    <input type="password" name="motDePasse" class="form-control" required>
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
</script>




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
    <section class="container mt-5">
        <div class="row">
            <div class="col-12 text-center p-8">
                <h3 class="font-weight-bold border border-dark p-2">Voiture d'occasion</h3>
            </div>
        </div>
        
<!-- Voiture 1 -->
        <div class="row mt-5">
            <div class="col-4 text-center">
                <div class="card">
                    <img class="voiture card-img-top" src="../images/voiture-occasion/fordfocus-1.jpg" alt="BMW">
                    <div class="card-body">
                        <h5 class="card-title">FORD Focus 90CH ESSENCEs</h5>
                        <p class="card-text">Description de la voiture 1.</p>
                        <p class="card-text">Prix : 3500€</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal1">Détail</a>
                    </div>
                </div>
            </div>

<!-- Voiture 2 -->
            <div class="col-4 text-center">
                <div class="card">
                    <img class="voiture card-img-top" src="../images/voiture-occasion/toyota-1.jpg" alt="TOYOTA">
                    <div class="card-body">
                        <h5 class="card-title">TOYOTA Corolla 115CH DIESEL</h5>
                        <p class="card-text">Description de la voiture 2.</p>
                        <p class="card-text">Prix : 2800€</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal2">Détail</a>
                    </div>
                </div>
            </div>

<!-- Voiture 3 -->
            <div class="col-4 text-center">
                <div class="card">
                    <img class="voiture card-img-top" src="../images/voiture-occasion/c4picasso-1.jpg" alt="CITROEN">
                    <div class="card-body">
                        <h5 class="card-title">CITROEN C4Picasso 110CH DIESEL</h5>
                        <p class="card-text">Description de la voiture 3.</p>
                        <p class="card-text">Prix : 3200€</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal3">Détail</a>
                    </div>
                </div>
            </div>
        </div> 
        
<!-- Voiture 4 -->
        <div class="row mt-5">
            <div class="col-4 text-center">
                <div class="card">
                    <img class="voiture card-img-top" src="../images/voiture-occasion/swift-1.jpg" alt="SUZUKI">
                    <div class="card-body">
                        <h5 class="card-title">SUZUKI Swift 94CH ESSENCE</h5>
                        <p class="card-text">Description de la voiture 3.</p>
                        <p class="card-text">Prix : 3200€</p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carModal3">Détail</a>
                    </div>
                </div>
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

