<?php
$articles = ["Chaussettes", "T-shirts", "Chaussures", "Sacs", "Vestes"];


$quantites = [10, 5, 8, 3, 12];

echo "Liste des articles et leurs quantités en stock:\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$i. $articles[$i]: $quantites[$i] en stock\n";
}


echo "\n--- Simuler une vente ---\n";

$index_de_l_Article = readline("Choisissez l'index de l'article à vendre : ");

$quantiteVente = readline("Quantité à vendre : ");

if ($quantites[$index_de_l_Article] >= $quantiteVente) {
    $quantites[$index_de_l_Article] -= $quantiteVente;
    echo "Vente réussie de $quantiteVente $articles[$index_de_l_Article].\n";
} else {
    echo "Stock insuffisant pour $articles[$index_de_l_Article].\n";
}

echo "\n--- Réapprovisionnement ---\n";

$index_de_l_Article = readline("Choisissez l'index de l'article à réapprovisionner : ");

$quantiteReappro = readline("Quantité à ajouter : ");
$quantites[$index_de_l_Article] += $quantiteReappro;
echo "Nouvelle quantité de $articles[$index_de_l_Article]: $quantites[$index_de_l_Article]\n";


echo "\n--- Synthèse du stock ---\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$articles[$i]: $quantites[$i] en stock\n";
}
