<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Liste de course sous forme de tableau associatif
$liste_de_courses = array(
    array("Article" => "Pain", "Quantité" => "1"),
    array("Article" => "Lait", "Quantité" => "2"),
    array("Article" => "Tomates", "Quantité" => "5"),
    array("Article" => "Pâtes", "Quantité" => "1 paquet"),
    array("Article" => "Fromage", "Quantité" => "200g")
);

// Affichage du tableau
echo "<h1>Liste de Courses</h1>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Article</th><th>Quantité</th></tr>";

foreach ($liste_de_courses as $item) {
    echo "<tr><td>" . $item['Article'] . "</td><td>" . $item['Quantité'] . "</td></tr>";
}

echo "</table>";
?>
</body>
</html>