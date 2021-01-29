<?php

$data = array_map(function ($el) {
    return htmlspecialchars($el);
}, $_POST);

count($data) > 2 ? signIn($data) : logIn($data);

//Fonction d'inscription

 function signIn($formData){
    require_once 'connexion.php';
     $toAdd = array();
     $err = array('nom' => 'Vous avez entrez deux mot de passe différents!');
     if($formData['password1'] != $formData['password2']) {
        if(ajaxRequest()) {
            echo json_encode($err);
            http_response_code(400);
        }
        die();
     } else {
         $formData['password1'] = sha1($formData['password1']);
         array_pop($formData);
        }
    foreach ($formData as $key => $value) {
        array_push($toAdd, $value);
    }
    $randWord = random_bytes(random_int(3, 4) * strlen($toAdd[1]));
    array_push($toAdd, $randWord);
    $req = $db -> prepare('INSERT INTO admin(username, adminpassword, directaccess) VALUES(?, ?, ?)');
    $req -> execute($toAdd);
 }
 
 //Fonction de connexion

 function logIn($formData) {
    require_once 'connexion.php';
    $toCheck = array();
    $err = array('nom' => "L'un des champs est incorrect!");
    foreach ($formData as $key => $value) {
        array_push($toCheck, $value);
    }
    $rq = $db -> query('SELECT * FROM admin');
    $res = $rq -> fetch();
    if ($res['username'] != $toCheck[0] ) {
        if(ajaxRequest()) {
            echo json_encode($err);
            http_response_code(400);
        }
        die();
    }
 }
?>