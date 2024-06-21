<?php 
    session_start();

    require '../models/connDB.php' ;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        if (empty($email) || empty($mdp)) {
            header('location: login.php?error=veuillez remplir tout les champ');
<<<<<<< HEAD
            echo "Login or password is FALSE.";

            exit();
        }
        $query = "SELECT * FROM client WHERE email = :email AND mdp = :mdp";

       
        $stm=$conn->prepare($query) ;
        $stm->bindParam('email', $email);
        $stm->bindParam('mdp', $mdp);
=======
            exit();
        }

        $query = "SELECT * FROM client WHERE email = :email AND mdp = :mdp";
       
        $stm=$conn->prepare($query) ;
        $stm->bindParam(':email', $email);
        $stm->bindParam(':mdp', $mdp);
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
        $stm->execute();

        if ($stm->rowCount() == 1) {
            $_SESSION['email'] = true;
            $_SESSION['email'] = $email;
            header('location: ../index.php');
            exit();
        } else {
            header('Location: login.php?error=Email ou mot de passe incorrect');
<<<<<<< HEAD
            echo "Login or password is incorrect.";

=======
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
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

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    .login-container h2 {
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
<body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
<<<<<<< HEAD
        <form id="login-form" action="login.php" method="post">
            <div class="form-group">
                <label for="email">إسم المستخدم</label>
                <input name="email" type="text" id="username" class="form-control" placeholder="أدخل إسم المستخدم">
            </div>
            <div class="form-group">
                <label for="mdp">كلمة المرور</label>
=======
        <form id="login-form" action="login.php" method="POST">
            <div class="form-group">
                <label for="username">إسم المستخدم</label>
                <input name="email" type="text" id="username" class="form-control" placeholder="أدخل إسم المستخدم">
            </div>
            <div class="form-group">
                <label for="password">كلمة المرور</label>
>>>>>>> 624c8a8cea32ee661ee5878b3cfd5b16057e7428
                <input name="mdp" type="password" id="password" class="form-control" placeholder="أدخل كلمة المرور">
            </div>
            <button type="submit" class="btn">تسجيل الدخول</button><br><br>
            <a href="../sinscrire/sinscrire.php" type="submit" class="btn">إنشاء حساب</a><br><br>
            <button type="submit" class="btn"> إسترجاع كلمة المرور</button>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>

</body>
</html>
