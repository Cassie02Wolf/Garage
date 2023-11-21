<?php
// Incluez le fichier de connexion à la base de données
include 'connexion.php';

// Assurez-vous que l'utilisateur est connecté en tant qu'administrateur
// Vous pouvez utiliser une session pour gérer cela

// Exemple basique de vérification d'authentification (à améliorer selon vos besoins)
session_start();
if (!isset($_SESSION['utilisateur']) || $_SESSION['utilisateur']['role'] !== 'admin') {
    header('Location: index.html'); // Redirige vers la page d'accueil si l'utilisateur n'est pas un administrateur
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Page Admin</title>
    <!-- Ajoutez vos styles CSS et autres éléments d'en-tête si nécessaire -->
</head>

<body>

    <!-- Contenu de la page d'administration -->
    <h1>Bienvenue sur la page d'administration</h1>
    <!-- Ajoutez le contenu spécifique à la page d'administration ici -->

</body>

</html>
