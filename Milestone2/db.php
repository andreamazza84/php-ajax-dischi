<?php 
// Stampare a schermo una decina di dischi musicali (vedi screenshot).
// Utilizzare:
// Html, Sass, JS, VueJS, PHP
// Prima Milestone:
// Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi 
// in pagina: al caricamento della pagina ci saranno tutti i dischi.

// Seconda Milestone:
// Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
// Bonus:
// Attraverso un’altra chiamata ajax, filtrare gli album per artista
// Lo screenshot si trova nelle slide.
$db = [
    ["author" => "Bon Jovi", "album" => "New Jersey", "year" => 1998,  "path" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg"],
    ["author" => "Queen", "album" => "Live at Wembley", "year" => 1992, "path" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg"],
    ["author" => "Sting", "album" => "Ten Summoner's Tales", "year" => 1993, "path" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg"],
    ["author" => "Steve Gadd Band", "album" => "Steve Gadd Band", "year" => 2018, "path" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg"],
    ["author" => "Iron Maiden", "album" => "Brave New World", "year" => 2000, "path" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg"],
    ["author" => "Eric Clapton", "album" => "One more car, one more raider", "year" => 2002, "path" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg"],
    ["author" => "Deep Purple", "album" => "Made in Japan", "year" => 1972, "path" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg"],
    ["author" => "Metallica", "album" => "...And justice for all", "year" => 1988, "path" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg"],
    ["author" => "Dave Weckl", "album" => "Hard Wired", "year" => 1994, "path" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg"],
    ["author" => "Michael jackson", "album" => "Bad", "year" => 1987, "path" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg"],
];

header('Content-Type: application/json');
echo json_encode($db);


