<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touche pas au klaxon - Connexion</title>
</head>
<body>
    <main>
        <h1>Mon projet PHP de test</h1>
        <form action="login.php" method="post">
            <fieldset>
                <legend>Saississez votre nom et votre mot de passe</legend>
                <br><label for="name">Nom</label><br>
                <input type="text" id="name" name="name" required><br>

                <label for="mdp">Mot de passe</label><br>
                <input type="password" id="mdp" name="mdp" required><br><br>

                <input type="submit" value="Soumettre">
            </fieldset>
        </form>
        <form action="userfile.php" method="POST" enctype="multipart/form-data">
            <label for="image" class="form-label">Votre image</label>
            <input type="file" class="form-control" id="image" name="image">
            <button type="submit">Envoyer</button>
        </form>
    </main>
</body>
</html>