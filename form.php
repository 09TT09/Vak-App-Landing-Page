<?php

if (isset($_POST['email'])) {
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $pdo = new PDO('mysql:host=localhost;dbname=vakapp', 'root', 'root');
            $req = $pdo->prepare('INSERT INTO users(email) VALUES(:email)');
            $req->execute(array(
                'email' => $_POST['email']
            ));
            header('Location: /?success');
            exit();
        } else {
            header('Location: /?error');
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
