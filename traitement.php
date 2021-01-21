<?php
require_once 'connexion.php';
function inputIsSet($input) {
    return isset($input) ? $input : '';
}
$nom = inputIsSet($_POST['nom']);
echo $nom;
$prenom = inputIsSet($_POST["prenom"]);
$naissance = inputIsSet($_POST["naissance"]);
$sexe = inputIsSet($_POST["sexe"]);
$ville = inputIsSet($_POST["ville"]);
$formation = inputIsSet($_POST["formation"]);
$email = inputIsSet($_POST["email"]);

//Manipulation des données $ville et $formation, $sexe
$Villes = array('Ouaga' => 'Ouagadougou', 'Bobo' => 'Bobo Dioulasso');
$Formations = array('Dev_web' => 'Développement web et web mobile', 'Ref_dig' => 'Référent digital');
$Sexe = array('homme' => 'Masculin', 'femme' => 'Feminin');
function filterRelatedEl($el, $arr) {
    if($el != '') {
        foreach($arr as $key => $value) {
            if($el == $key) {
                $el = $arr[$key];
            } else if($el == $value) {
                $el = $arr[array_search($value, $arr)];
            }
        }
    }
    return $el;
}
$ville = filterRelatedEl($ville, $Villes);
$formation = filterRelatedEl($formation, $Formations);
$sexe = filterRelatedEl($sexe, $Sexe);

$preparation = $db->prepare("INSERT INTO apprenants (ID, Email, Nom, Prenom, Dates_de_naissance, Sexe, ville, formation) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
$preparation->execute(array("", $email, $nom, $prenom, $naissance, $sexe, $ville, $formation));
?>