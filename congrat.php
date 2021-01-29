<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription réussi</title>
    <style>
        html {font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
        div {
            display: block;
            text-align: center;
            margin-top: 50px;
        }
        span {color: #707070;}
    </style>
</head>
<body>
    <?php 
    require_once 'connexion.php';
    ?>
    <div>
        <img src="fonts/success-icon.png" alt="Inscription réussi">
       <h2>Inscription réussi!</h2>
       <span>Vous êtes entrain d'être rédiriger...</span>
    </div>
    <script>
        setTimeout(() => {
            document.location = 'liste.php';
        }, 1500);
    </script>
</body>
</html>