<?php
// --- 1. Initialisation du stock ---
// Ce tableau contient les noms des articles disponibles dans la boutique.
$articles = ["Chaussettes", "T-shirts", "Chaussures", "Sacs", "Vestes"];

// Ce tableau contient les quantités en stock de chaque article.
// La quantité de chaque article correspond à l'index dans le tableau $articles (par exemple, $quantites[0] correspond à "Chaussettes").
$quantites = [10, 5, 8, 3, 12];

// Affichage des articles et de leurs quantités en stock
echo "Liste des articles et leurs quantités en stock:\n";
for ($i = 0; $i < count($articles); $i++) {
    // La boucle 'for' parcourt chaque article et affiche son nom et sa quantité en stock
    echo "$i. $articles[$i]: $quantites[$i] en stock\n";
}

// --- 2. Réalisation d'une Vente ---
// On simule ici une vente, c'est-à-dire qu'un client achète un certain nombre d'articles

echo "\n--- Simuler une vente ---\n";

// On demande à l'utilisateur de choisir un article en entrant l'index (le numéro) de l'article qu'il veut acheter
$indexArticle = readline("Choisissez l'index de l'article à vendre : ");

// On demande ensuite la quantité que l'utilisateur souhaite acheter pour cet article
$quantiteVente = readline("Quantité à vendre : ");

// Vérification de la quantité en stock pour voir si elle est suffisante
if ($quantites[$indexArticle] >= $quantiteVente) {
    // Si la quantité en stock est suffisante, on réduit la quantité disponible
    $quantites[$indexArticle] -= $quantiteVente;
    echo "Vente réussie de $quantiteVente $articles[$indexArticle].\n";
} else {
    // Si la quantité en stock est insuffisante, on affiche un message d'erreur
    echo "Stock insuffisant pour $articles[$indexArticle].\n";
}

// --- 3. Réapprovisionnement du Stock ---
// On simule maintenant un réapprovisionnement, c'est-à-dire qu'on ajoute des articles au stock.

echo "\n--- Réapprovisionnement ---\n";

// On demande à l'utilisateur de choisir un article à réapprovisionner en entrant l'index de cet article
$indexArticle = readline("Choisissez l'index de l'article à réapprovisionner : ");

// On demande ensuite combien d'unités on souhaite ajouter au stock de cet article
$quantiteReappro = readline("Quantité à ajouter : ");

// On ajoute la quantité spécifiée au stock actuel de l'article
$quantites[$indexArticle] += $quantiteReappro;
echo "Nouvelle quantité de $articles[$indexArticle]: $quantites[$indexArticle]\n";

// --- 4. Synthèse et Affichage du Stock ---
// On affiche ici une synthèse du stock actuel de chaque article

echo "\n--- Synthèse du stock ---\n";
for ($i = 0; $i < count($articles); $i++) {
    // La boucle 'for' parcourt chaque article et affiche son nom et sa quantité en stock après les opérations de vente et réapprovisionnement
    echo "$articles[$i]: $quantites[$i] en stock\n";
}
