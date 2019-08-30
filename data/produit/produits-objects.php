<?php
require dirname (__FILE__)  .  "/../../src/Produit.php";

$produitsObjects = [
    new Produit(
        1,
        "Lorem",
        "cjia4561",
        46.15,
        "https://source.unsplash.com/300x180",
        "Lorem ipsum dolor sit amet",
        true


    ),
    new Produit(
        2,
        "Vestibulum",
        "bgdzc56",
        37.55,
        "https://source.unsplash.com/300x180",
        "Vestibulum diam massa, pretium sed dapibus",
        false
    ),
    new Produit (
        3,
        "Tortor",
        "tiocnujsi78",
        40.85,
        "https://source.unsplash.com/300x180",
        "Morbi tortor nisi, fermentum non nisi quis",
        true

    ),
];
