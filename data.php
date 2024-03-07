<?php
require_once __DIR__ . "./models/films.php";
require_once __DIR__ . "./models/series.php";




$movies = [
    
    new Films("Dune","Sci-fi/Avventura", "EN-en", 5),

    new Films("Dune Part 2","Sci-fi/Avventura", "EN-en", 5),
    
    new Films("Tenet","Azione/Sci-fi", "EN-en", 5),
    
    new Series("LoKi","Azione","EN-en", 2, 12, 5),

    new Series("Peaky Blinders","Drammatico","EN-en", 6, 36, 5),

    new Series("Rick and Morty","Sitcom","EN-en", 7, 71, 5),
    
];



?>