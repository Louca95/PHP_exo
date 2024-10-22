<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post_php</title>
</head>
<body>

<pre>
    <code>
        <body>
            <!-- Notez l'ajout des paramètres dans l'URL de l'action -->
            <form action="traitement.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" >
        
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" >
            
            <label for="email">Email:</label>
            <input type="text" style='width:200'id="email" name="email" >

            <label for="password">Mots de passe:</label>
            <input type="password" id="password" name="password" >

            <label for="town">Ville:</label>
            <input type="text" id="town" name="town" >

            <label for="pays">Pays:</label>
            <input type="text" id="pays" name="pays" >

            




            <input type="submit" value="Envoyer">
            </form>
        </body>
        </html>
    </code>
    </pre>
</body>
</html>