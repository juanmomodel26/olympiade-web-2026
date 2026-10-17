WONDERLAND

application de gestion de parc d'attraction

///////////////////// INSTALLATION //////////////////////

Clonez ou téléchargez ce dépôt.

Placez le dossier du projet dans le répertoire htdocs de XAMPP.

Démarrez Apache et MySQL depuis le panneau de contrôle XAMPP.

Ouvrez phpMyAdmin et créez la base de données nécessaire.

Importez le fichier SQL fourni dans le dépôt.

Ouvrez le projet dans votre navigateur à l'adresse suivante : http://localhost/olympiade/.


///////////////////// INFO PROJET //////////////////////

création des utilisateurs : 
- admin : nom d'utilisateur "admin", mdp 12-30 char (modifier type="email" en "text" de forminscr /front/connexion.php pour pouvoir mettre "admin")
- user : email, mdp 12-30char

Figma : https://www.figma.com/design/BbDjns1vcDYohMnOX805Xt/Sans-titre?node-id=0-1&p=f&t=N9vVyLN9oov0AVg4-0

Palier 1 :
- page d'accueil, listing des attractions
- page unique pour chaque attractions
- base de données

Palier 2 :
- utilisateur admin, mdp hashé
- page admin, requiert connexion
- ajout, suppression, modification des attractions, modif attente attractions, affichage de la liste des billets achetés utilisables, validation des billets

Palier 3 :
- création compte utilisateur
- email unique et obligatoire pour compte
- page d'achat de billet
- page confirmation achat avec affichage prix commande
- page d'affichage des billets achetés

Palier 4 :
- page "en direct" info en brut 


///////////////////// CHOIX TECHNIQUES //////////////////////

- Page utilisateur et page gestion de données séparées pour une sécurisation acrue
- Utilisation de requetes préparées pour limiter la possibilité d'injections sql 
- Hashage des mot de passe utilisateur et admin
- utilisateur unique en base de données pour simplifier la gestion des données

///////////////////// BUGS //////////////////////

- modification possible du prix d'achat des billets