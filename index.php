<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/authentification.css">
    <title>Connexion</title>
    <?php 
    require_once 'connexion.php';
    $access = $db -> query('SELECT directaccess FROM admin');
    $key = $access -> fetch();
    if($key) header('Location: liste.php');
    ?>
</head>
<body>
    <div class="div_header">
        <a href="connexion.php"><img class="img_header2" src="fonts/logo.png" alt="Simplon"></a>
    </div>
    <h1>Connexion</h1>
    <div class="error"><span>Il y'a une erreur!</span><button>+</button></div>
    <form method="post">
        <div class="alignement">
                <label class="label" for="nom"> Nom d'utilisateur:</label>
                <input class="input" type="text" id="nom" name="username" placeholder="Veuillez entrer le nom d'ulisateur" required>
            </div>
            <div class="alignement">
                <label class="label" for="prenom"> Mot de passe:</label>
                <input class="input" type="password" name="password" placeholder="Veuillez entrer le mot de passe" required>
            </div>
        <button type="submit">Se connecter</button>
    </form>
    <p><span>ou</span></p>
    <div class="crateAccount">
        <a href="signIn.php"> créer le compte admin</a>
    </div>

    <script src="authentification.js"></script>
</body>
</html>