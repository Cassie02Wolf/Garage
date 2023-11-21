1)Exécution en locale de l'appli 


A)Installer un serveur local :
    _Télécharger Wamp via  selon votre système d'exploitation sur le site officiel : "https://www.wampserver.com/".
	_Installez le serveur en suivant les instructions spécifiques à votre système.
	
B)Configurer le serveur local :
    _Assurez-vous que le serveur est en cours d'exécution (L'icône de WampServer dans la barre des tâches doit être verte),sinon clique gauche sur l'icône de la barre des tâches cacher et cliquez sur "Démarer les services".
    _Clique gauche sur l icône dans la barre des tâches cachée en bas à droite de votre écran et cliquez sur "LocalHost". 

C)Placez vos fichiers dans le répertoire www de WampServer :
    _Vérifiez que les fichiers de votre site web sont placés dans le répertoire approprié (habituellement, dans le dossier www pour WampServer).
	
D) Base de donnée :
    _Si votre site web utilise une base de données, assurez-vous d'importer une copie locale de la base de données.
	
E)Accédez à votre site via le navigateur :
    _Ouvrez un navigateur web.
    _Accédez à votre site en utilisant l'URL locale. Par défaut, c'est http://localhost/nom-de-votre-projet.



!!En cas de problèmes, consultez les fichiers de logs d'Apache et de PHP pour identifier les erreurs!!
!!Les fichiers de logs d'Apache se trouvent généralement dans le dossier logs du répertoire d'installation de WampServer!!
!!Vous pouvez trouver l'emplacement du fichier de logs PHP dans le fichier de configuration php.ini de WampServer!!


2) Création de l'administrateur
 
   CREATE DATABASE sgbd
    DEFAULT CHARACTER SET = 'utf8mb4';

   CREATE TABLE utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('admin', 'employe') NOT NULL
   );


   -- Insertion d'utilisateur pour la table Utilisateurs (cration de l'utilisateur Admin) --
   INSERT INTO utilisateur (surname, firstname, email, password_hash, role)
   VALUES ('parrot', 'vincent', 'parrot-vincent@hotmail.fr', SHA2('123456', 256), 'admin');
