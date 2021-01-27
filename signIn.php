<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/authentification.css">
    <title>Créer un compte admin</title>
</head>
<body>
<div class="div_header">
        <a href="connexion.php"><img class="img_header2" src="fonts/logo.png" alt="Simplon"></a>
    </div>
    <h1>Créer un compte admin</h1>
    <div class="error"><span>Il y'a une erreur!</span><button>+</button></div>
    <form method="post">
        <div class="alignement">
                <label class="label" for="username"> Nom d'utilisateur:</label>
                <input class="input" id="username" type="text" name="username" placeholder="Veuillez entrer le nom d'ulisateur" required>
            </div>
            <div class="alignement">
                <label class="label" for="password1"> Mot de passe:</label>
                <input class="input" id="password1" type="password" name="password1" placeholder="Veuillez entrer le mot de passe" required>
            </div>
            <div class="alignement">
                <label class="label" for="password2">Confirmation de mot de passe:</label>
                <input class="input" id="password2" type="password" name="password2" placeholder="Veuillez confirmer le mot de passe" required>
            </div>
        <button type="submit">S'inscrire</button>
    </form>

    <script src="authentification.js"></script>
</body>
</html>