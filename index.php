<?php

include('./Ingredient.php');
include('./Ustensile.php');
include('./Appareil.php');
include('./Recette.php');

$ingredients = [
    $chocolat = new Ingredient("chocolat", 250, "gr"),
    $oeuf = new Ingredient("oeuf", 4, "unité"),
    $sucre = new Ingredient("sucre", 100, "gr"),
    $sel = new Ingredient("sel", 1, "gr")
];

$ustensiles = [
    $saladier = new Ustensile("saladier", "contient", "verre"),
    $fouet = new Ustensile("fouet", "fouette", "latex"),
    $casserole = new Ustensile("casserole", "chauffe", "inox")
];

$appareils = [
    $batteur = new Appareil("batteur", "melange"),
    $gaziniere = new Appareil("gaziniere", "cuit"),
    $frigo = new Appareil("frigo", "refroidir")
];

$mousseChoco = new Recette($ingredients, $ustensiles, $appareils);
foreach ($mousseChoco->getIngredients() as $ingredient) {
    echo "vous aurez besoin de" . $ingredient->getQuantity() . ' ' . $ingredient->getMesure() . 'de' . $ingredient->getName() . '<br/>';
}

foreach ($mousseChoco->getUstensiles() as $ustensile) {
    echo "vous allez utiliser un" . $ustensile->getName() . 'en' . $ustensile->getMateriaux() . 'pour' . $ustensile->getUtility() . '<br/>';

}

foreach ($mousseChoco->getAppareils() as $appareil) {
    echo "vous allez utiliser un" . $appareil->getName() . 'pour' . $appareil->getUtility() . '<br/>';
}
//var_dump($mousseChoco->getUstensiles());
//var_dump($mousseChoco->getAppareils());
