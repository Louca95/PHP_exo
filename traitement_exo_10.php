
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['$nom'] = trim($_POST['nom']);
    $_SESSION['$prenom'] = trim($_POST['prenom']);
    $_SESSION['$email'] = trim($_POST['email']);
    $_SESSION['$mdp'] = trim($_POST['mdp']);
    
    
    $errors = [];

    if (strlen($nom) < 2 || strlen($nom) > 30) {
        $errors[] = "Le nom doit contenir entre 2 et 30 caractères.";
    }
    if (strlen($prenom) < 2 || strlen($prenom) > 30) {
        $errors[] = "Le prénom doit contenir entre 2 et 30 caractères.";
    }
    if (strlen($mdp) < 6 || strlen($mdp) > 20) {
        $errors[] = "Le mot de passe doit contenir entre 6 et 20 caractères.";
    }
} else {
    echo "<p>Requête non valide.</p>";
}
?>