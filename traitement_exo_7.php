<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 *  $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
           
 */if(empty($_POST['firstname']) && empty($_POST['nom']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  $_POST['firstname'];
    echo  $_POST['nom'];
    echo  $_POST['email'];
    echo  $_POST['mdp'];
    echo  $_POST['city'];
    echo  $_POST['country'];
 }
 $prenom = isset($_POST['firstname']) ? $_POST['prenom'] : 'Prénom non fourni';
 $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
 $email = isset($_POST['email']) ? $_POST['email'] : 'Email non fourni';
 $password = isset($_POST['mdp']) ? $_POST['password'] : 'mot de passe non fourni';
 $town = isset($_POST['city']) ? $_POST['town'] : 'Ville non fourni';
 $pays = isset($_POST['country']) ? $_POST['pays'] : 'Pays non fourni';

/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */
echo "<br>";
if(empty($_POST['firstname']) && empty($_POST['nom']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  htmlspecialchars($_POST['firstname']);
    echo  htmlspecialchars($_POST['nom']);
    echo  htmlspecialchars($_POST['email']);
    echo  htmlspecialchars($_POST['mdp']);
    echo  htmlspecialchars($_POST['city']);
    echo  htmlspecialchars($_POST['country']);
}

// Récupération des données POST 
        $nom = $_POST['nom'];
        $prenom = $_POST[''];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $town = $_POST['town'];
        $pays = $_POST['pays'];

        // Affichage des données
        echo "Nom (POST): " . htmlspecialchars($nom) . "<br>";
        echo "Prénom (POST): " . htmlspecialchars($prenom) . "<br>";

/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */

        

$email = 200;
$town = 130;



if ($_POST['town'] = 130) {
        echo "<p>town vide</p>";
    }else {
       echo "vous ne pouvez pas entrez cette adresse";
    }

if ($_POST['nom'] && $_POST['prenom'] && $_POST['email'] && $_POST['password'] && $_POST['town'] && $_POST['pays'] !== '') {
    echo '<div class="result">';
    echo '<h1>Résultats du formulaire</h1>';
    echo '<p>Nom : ' . htmlspecialchars($_POST['nom']) . '</p>';
    echo '<p>Prénom : ' . htmlspecialchars($_POST['prenom']) . '</p>';
    if ($_POST['email'] = 200) {
        echo "<p>email vide</p>";
    }else {
       echo "vous ne pouvez pas entrez cette adresse mail";
    }
    
    echo '<p>Password : ' . htmlspecialchars($_POST['password']) . '</p>';
    echo '<p>Town : ' . htmlspecialchars($_POST['town']) . '</p>';
    echo '<p>Pays : ' . htmlspecialchars($_POST['pays']) . '</p>';
    echo '</div>';
}

/** Exercice 4 : Limitation de longueur pour adresse 
 * 
 *  Objectif : Limiter la longueur de l'adresse saisie par l'utilisateur à 200 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ adresse
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */
// if ($_POST['email'] === '200') {
//     echo "<p>email vide</p>";
// }else {
//    echo "vous ne pouvez pas entrez cette adresse mail";
// }

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */
