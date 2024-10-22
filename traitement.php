<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 *  $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
           
 */
 $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : 'Prénom non fourni';
 $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
 $eamil = isset($_POST['email']) ? $_POST['email'] : 'Email non fourni';
 $password = isset($_POST['password']) ? $_POST['password'] : 'mot de passe non fourni';
 $nom = isset($_POST['town']) ? $_POST['town'] : 'Ville non fourni';
 $nom = isset($_POST['pays']) ? $_POST['pays'] : 'Pays non fourni';

/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */


/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */

        // Récupération des données POST
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $town = $_POST['town'];
        $pays = $_POST['pays'];

        // Affichage des données
        echo "Nom (POST): " . htmlspecialchars($nom) . "<br>";
        echo "Prénom (POST): " . htmlspecialchars($prenom) . "<br>";

$email =200;
$town = 130;

if ($_POST['email'] === 200) {
        echo "<p>email vide</p>";
    }else {
       echo "vous ne pouvez pas entrez cette adresse mail";
    }

if ($_POST['town'] === 130) {
        echo "<p>town vide</p>";
    }else {
       echo "vous ne pouvez pas entrez cette adresse";
    }

if ($_POST['nom'] && $_POST['prenom'] && $_POST['email'] && $_POST['password'] && $_POST['town'] && $_POST['pays'] !== '') {
    echo '<div class="result">';
    echo '<h1>Résultats du formulaire</h1>';
    echo '<p>Nom : ' . htmlspecialchars($_POST['nom']) . '</p>';
    echo '<p>Prénom : ' . htmlspecialchars($_POST['prenom']) . '</p>';
    echo '<p>Email : ' . htmlspecialchars($_POST['email']) . '</p>';
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
