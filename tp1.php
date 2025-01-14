<!DOCTYPE html>
<html>
<head>
    <title>tpphp</title>
</head>
<body>
<?php

$tab = array(
    "Karim",
    "Maroua",
    "Aya",
    "Mohammed",
    "Fatima",
);


echo "<h3>Tableau initial :</h3>";
echo "<pre>";
print_r($tab);
echo "</pre>";


$tab[] = "Salim";

echo "<h3>Après ajout de 'Salim' :</h3>";
echo "<pre>";
print_r($tab);
echo "</pre>";


unset($tab[0]); // supprime


$tab = array_values($tab);//pour les index


echo "<h3>Après suppression de 'Karim' :</h3>";
echo "<pre>";
print_r($tab);
echo "</pre>";
$recherche="Mohammed";
if(in_array($recherche,$tab)){
    echo"l'etudaint $recherche est present dans le tableau";
}
else{
    echo "L'étudiant '$recherche' n'est pas présent dans le tableau.";
}
foreach ($tab as $cle => $value) {
    if ($value === "Salim") {
        $tab[$cle] = "Daniel";
    }
}
echo "<h3>Après modification :</h3>";
echo "<pre>";
print_r($tab);
echo "</pre>";

echo "<h3>Liste des étudiants :</h3>";
$numero = 1;
foreach ($tab as $etudiant) {
    echo "Étudiant $numero : $etudiant<br/>";
    $numero++;
}
sort($tab);//trie
echo "<h3>Liste des étudiants triée :</h3>";
foreach ($tab as $etudiant) {
    echo $etudiant . "<br/>";
}
$tabInverse = array_reverse($tab);//inverse
echo "<h3>Liste des étudiants après inversion :</h3>";
foreach ($tabInverse as $etudiant) {
    echo $etudiant . "<br/>";
}
$nombreEtudiants = count($tab);

echo "<h3>Nombre d'étudiants : $nombreEtudiants</h3>";
echo "<h3>un tableau multidimensionnel :</h3>";
$etudiants_ages = array(
    "Karim" => 22,
    "Maroua" => 24,
    "Aya" => 21,
    "Mohammed" => 23,
    "Fatima" => 25,
    "Salim" => 22
);
echo "<pre>";
print_r($etudiants_ages);
echo "</pre>";

?>
</body>
</html>