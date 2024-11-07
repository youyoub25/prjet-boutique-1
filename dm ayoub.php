<?php
$articles = ["doudoune", "casque", "chaussures", "gants", "écharpe"];
$quantites = [10, 20, 30, 40, 50];
$ventes = [0, 0, 0, 0, 0];

// Liste des articles avec for
echo "      Liste des articles avec for :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$articles[$i]\n";
}

echo "\n";

// Liste des articles avec foreach
echo "      Liste des articles avec foreach :\n";
foreach ($articles as $article) {
    echo "$article\n";
}

// Afficher articles et stocks
echo "\nArticles disponibles avec leurs quantités :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$i: $articles[$i] - Quantité : $quantites[$i]\n";
}

// Simulation vente
echo "Choisissez un article (numéro) : ";
$index = intval(trim(fgets(STDIN)));
echo "Quantité : ";
$quantite = intval(trim(fgets(STDIN)));

// verif stock
if (isset($articles[$index]) && $quantites[$index] >= $quantite) {
    // MAJ dustock
    $quantites[$index] -= $quantite;
    echo " Vente confirmée : $quantite {$articles[$index]}.\n";
    echo "Quantité restante de {$articles[$index]} : {$quantites[$index]}\n";
} else {
    echo " Stock insuffisant.\n";
}




// choix et reapprovisionnement articles
echo "Choisissez un article à réapprovisionner (numéro) : ";
$index = intval(trim(fgets(STDIN)));
echo "Quantité à ajouter : ";
$quantiteAjouter = intval(trim(fgets(STDIN)));

// index valide?
if (isset($articles[$index])) {

    // Ajout stock
    $quantites[$index] += $quantiteAjouter;
    echo "Réapprovisionnement de : $quantiteAjouter  {$articles[$index]}.\n";
    echo "Nouvelle quantité de {$articles[$index]} : {$quantites[$index]}\n";
} else {
    echo " Index de l'article invalide.\n";
}

// Etat actuel stock
echo "État actuel du stock de la boutique :\n";
for ($i = 0; $i < count($articles); $i++) {
    if ($quantites[$i] > 0) {
        echo "{$articles[$i]} - Quantité restante : {$quantites[$i]}\n";
    } else {
        echo "{$articles[$i]} - En rupture de stock\n";
    }
}

// nombre  de ventes
echo "Nombre total de ventes par article :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "{$articles[$i]} - Ventes totales : {$ventes[$i]}\n";
}


// article à supprimer
echo "Choisissez un article à supprimer (numéro) : ";
$indexSupprimer = intval(trim(fgets(STDIN)));

// Supprime l'article
unset($articles[$indexSupprimer]);
unset($quantites[$indexSupprimer]);
unset($ventes[$indexSupprimer]);

echo "l'article a été supprimé";

// Affiche la liste des articles restants et leurs quantités
echo "\ Articles restants dans la boutique :\n";
for ($i = 0; $i < count($articles); $i++) {
    echo "$i: {$articles[$i]} - Quantité : {$quantites[$i]}\n";
}
