-- Création de la table Utilisateurs --
CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'employe') NOT NULL
);

-- Insertion d'utilisateur pour la table Utilisateurs (cration de l'utilisateur Admin) --
INSERT INTO utilisateur (nom, prenom, email, mot_de_passe_hash, role)
VALUES ('Parrot', 'Vincent', 'Parrot-Vincent@hotmail.fr', SHA2('motdepasse', 123456), 'admin');