<?php

if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email'])) {
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email'])) {
        if (is_string($_POST['prenom']) && is_string($_POST['nom']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $pdo = new PDO('mysql:host=localhost;dbname=vakapp', 'root', 'root');
            $req = $pdo->prepare('INSERT INTO users(nom, prenom, email) VALUES(:nom, :prenom, :email)');
            $req->execute(array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email']
            ));
            header('Location: /?success');
            exit();
        }
    } else {
        header('Location: /?error');
        exit();
    }
} else {
    header('Location: /?error');
    exit();
}
