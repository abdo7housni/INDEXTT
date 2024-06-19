<?php
    require '../models/connDB.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $statement = $conn->prepare('INSERT INTO client (nom, prenom, email, mdp) VALUES ( :nom, :prenom, :email, :mdp)');
        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':prenom', $prenom);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':mdp', $mdp);
        if ($statement->execute()) {
            echo 'add success';
        } else {
            echo 'error';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            position: fixed;
            width: 100%;
            height: 100%;
            background-image: url(../back-ground/back-ground-pc.jpg);
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container, .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2, .register-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>إنشاء حساب</h2>
        <form id="register-form" method="post" action="sinscrire.php">
            <div class="form-group">
                <label for="nom">إسم المستخدم</label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="أدخل إسم المستخدم">
            </div>
            <div class="form-group">
                <label for="prenom">إسم المستخدم</label>
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="أدخل إسم المستخدم">
            </div>
            <div class="form-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="أدخل البريد الإلكتروني">
            </div>
            <div class="form-group">
                <label for="mdp">كلمة المرور</label>
                <input type="password" id="mdp" name="mdp" class="form-control" placeholder="أدخل كلمة المرور">
            </div>
            <div class="form-group">
                <label for="confirm-mdp">تأكيد كلمة المرور</label>
                <input type="password" id="confirm-mdp" name="confirm-mdp" class="form-control" placeholder="أكد كلمة المرور">
            </div>
            <button type="submit" class="btn">إنشاء حساب</button>
        </form>
    </div>
</body>
</html>
