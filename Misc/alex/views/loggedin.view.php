<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.view.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hallo, <b><?= htmlspecialchars($_SESSION["gebruikersnaam"]) ?></b>. Welkom bij WFFLIX.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Wachtwoord resetten.</a>
        <a href="logout.php" class="btn btn-danger">Uitloggen</a>
    </p>
</body>
</html>