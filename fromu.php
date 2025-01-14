<?php
// index.php

// Include the fetch script to get the list of users
include 'fetch.php';

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_complet = $_POST['nom_complet'];
    $age = $_POST['age'];
    $filiere = $_POST['filiere'];
    $loisir = $_POST['loisir'];

    // Insertion des données dans la base
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO users (nom_complet, age, filiere, loisir) VALUES (:nom_complet, :age, :filiere, :loisir)");
        $stmt->execute([
            ':nom_complet' => $nom_complet,
            ':age' => $age,
            ':filiere' => $filiere,
            ':loisir' => $loisir
        ]);

        $message = "Données enregistrées avec succès !";
    } catch (PDOException $e) {
        $message = "Erreur : " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #427AA1;
            padding: 20px;
        }
        form {
            background: #B6D8F2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding-right: 20px;
            width: 400px;
            height: 350px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            width: 200px;
            margin-right: 50px;
        }
        input {
            width: 95%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            max-width: 600px;
            border-collapse: collapse;
            margin-top: 20px;
            font-weight : normal;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #007BFF;
            color: white;
        }
        h1{
            font-family: Arial, sans-serif;
        }
        p{
            color: #212E53;
        }
    </style>
</head>
<body>
<h1>MEMBRE LOGIN</h1>

<!-- Affichage du message -->
<?php if ($message): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<!-- Formulaire -->
<form method="POST">
    <label for="nom_complet">Nom complet :</label>
    <input type="text" id="nom_complet" name="nom_complet" required>

    <label for="age">Âge :</label>
    <input type="number" id="age" name="age" required>

    <label for="filiere">Filière :</label>
    <input type="text" id="filiere" name="filiere" required>

    <label for="loisir">Loisir :</label>
    <input type="text" id="loisir" name="loisir" required>

    <button type="submit">Soumettre</button>
</form>

<!-- Table des utilisateurs -->
<?php if (count($users) > 0): ?>
    <h2>Liste des utilisateurs</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom complet</th>
            <th>Âge</th>
            <th>Filière</th>
            <th>Loisir</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nom_complet'] ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= $user['filiere'] ?></td>
                <td><?= $user['loisir'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun utilisateur enregistré.</p>
<?php endif; ?>
</body>
</html>
