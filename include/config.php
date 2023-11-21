<?php

$dbhost = $_ENV['DB_HOST'] = 'localhost';
$dbname = $_ENV['DB_NAME'] = 'sgbd.sql';
$dbemail = $_ENV['DB_EMAIL'] = 'parrot-vincent@hotmail.fr';
$dbpassword = $_ENV['DB_PASSWORD'] = '123456';

try {
    $pdo = new PDO("mysql:$dbhost;dbname:$dbname",$dbemail,$dbpassword);

    echo "<br>";
    echo " Connexion à la base de donnée réussi";
}
    catch (PDOException $e) {
        echo " Erreur de connexion à la base de donnée ". $e->getMessage();
    }












/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Effectuez la connexion à la base de données
    $db = new SQLite3('E:\Wamp\www\projet_garage\bdd\sgbd.sql');

    // Vérifiez les informations d'identification
    $query = $db->prepare("SELECT * FROM Admin WHERE Email = :email AND MotDePasse = :password");
    $query->bindValue(':email', $email, SQLITE3_TEXT);
    $query->bindValue(':password', $password, SQLITE3_TEXT);
    $result = $query->execute();

    // Si une ligne correspond, l'utilisateur est authentifié
    if ($result->fetchArray()) {
        // Page de succès à la connexion
        header("Location: admin.php");
        exit();
    } else {
        // Page d'échec à la connexion
        header("Location: test.html");
        exit();
    }

}
?>
