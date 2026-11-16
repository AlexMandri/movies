<?php
require_once("db.php");
require_once("globals.php");

$stmt = $conn->prepare("SELECT * FROM users");

$stmt ->execute();
$users = $stmt ->fetchAll();
echo "<pre>";
print_r($users);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="./CSS/styles.css">
</head>

<body>
    <h1>Lista de usuários</h1>
    <?php foreach($users as $user): ?>
        <p>
            <?= $user["name"] ?>
            <?= $user["lastname"] ?>
        </p>

        <?php endforeach; ?>
</body>

</html>
