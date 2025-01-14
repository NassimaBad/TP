<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tpphp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        h3 {
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .student-list {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    $tab = array(
        "Karim",
        "Maroua",
        "Aya",
        "Mohammed",
        "Fatima",
    );

    echo "<h3>Tableau initial :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tab as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    $tab[] = "Salim";
    echo "<h3>Après ajout de 'Salim' :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tab as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    unset($tab[0]);
    $tab = array_values($tab);
    echo "<h3>Après suppression de 'Karim' :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tab as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    $recherche = "Mohammed";
    if (in_array($recherche, $tab)) {
        echo "<p class='result'>L'étudiant $recherche est présent dans le tableau.</p>";
    } else {
        echo "<p class='result'>L'étudiant '$recherche' n'est pas présent dans le tableau.</p>";
    }

    foreach ($tab as $cle => $value) {
        if ($value === "Salim") {
            $tab[$cle] = "Daniel";
        }
    }

    echo "<h3>Après modification :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tab as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    echo "<h3>Liste des étudiants :</h3>";
    echo "<table>";
    echo "<tr><th>Numéro</th><th>Étudiant</th></tr>";
    $numero = 1;
    foreach ($tab as $etudiant) {
        echo "<tr><td>$numero</td><td>$etudiant</td></tr>";
        $numero++;
    }
    echo "</table>";

    sort($tab);
    echo "<h3>Liste des étudiants triée :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tab as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    $tabInverse = array_reverse($tab);
    echo "<h3>Liste des étudiants après inversion :</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Étudiant</th></tr>";
    foreach ($tabInverse as $index => $etudiant) {
        echo "<tr><td>$index</td><td>$etudiant</td></tr>";
    }
    echo "</table>";

    $nombreEtudiants = count($tab);
    echo "<h3>Nombre d'étudiants : $nombreEtudiants</h3>";

    echo "<h3>Un tableau multidimensionnel :</h3>";
    $etudiants_ages = array(
        "Karim" => 22,
        "Maroua" => 24,
        "Aya" => 21,
        "Mohammed" => 23,
        "Fatima" => 25,
        "Salim" => 22
    );
    echo "<table>";
    echo "<tr><th>Étudiant</th><th>Âge</th></tr>";
    foreach ($etudiants_ages as $etudiant => $age) {
        echo "<tr><td>$etudiant</td><td>$age</td></tr>";
    }
    echo "</table>";
    ?>
</div>

</body>
</html>
