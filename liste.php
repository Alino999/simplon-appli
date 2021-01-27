<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/accueil.css">
    <title>Listes des apprenant Simplon</title>
</head>
<body>
    <?php
    require_once "affichage.php";
    ?>
    <header>
        <div id="logo">
            <a href="index.php">
                <img src="fonts/logo.png" alt="LogoSimplon">
            </a>
        </div>
        <div id="searchbar">
            <form action="traitement.php" method="GET" id="form">
                <input type="text" name="input" id="input" placeholder="Filtrer...">
                <button type="submit">
                    <img src="fonts/search_Icon.png" alt="Rechercher">
                </button>
            </form>
        </div>
    </header>
    <main>
        <div id="addBtn">
            <a href="formulaire.html">Ajouter l'apprenant</a>
        </div>
        <div id="list">
            <h1>Listes des apprenants</h1>
            <div id="table">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <h3>Nom</h3>
                            </th>
                            <th>
                                <h3>Prénom</h3>
                            </th>
                            <th>
                                <h3>Email</h3>
                            </th>
                            <th>
                                <h3>Date de naissance</h3>
                            </th>
                            <th>
                                <h3>Ville d'origine</h3>
                            </th>
                            <th>
                                <h3>Sexe</h3>
                            </th>
                            <th>
                                <h3>Formation</h3>
                            </th>
                        </tr>
                    </thead>  
                    <tbody>

                        
                    </tbody>
                  </table>
            </div>
        </div>
    </main>
    <script>let donnees = [];</script>
    <script>
        <?php
    while($data = $recuperation -> fetch()) {
        ?>
            donnees.push({
                nom: '<?= $data['Nom']; ?>',
                prenom: '<?= $data['Prenom']; ?>',
                email: '<?= $data['Email']; ?>',
                naissance: '<?= $data['Dates_de_naissance']; ?>',
                sexe: '<?= $data['Sexe']; ?>',
                ville: '<?= $data['ville']; ?>',
                formation: '<?= $data['formation']; ?>'
            });
        
        <?php
    }
                           
        ?>
    </script>
    <script src="app.js"></script>
</body>
</html>