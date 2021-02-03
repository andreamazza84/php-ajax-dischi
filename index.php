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

$albums = [
    ["author" => "Bon Jovi", "album" => "New Jersey", "year" => 1998,"path" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg"],
    ["author" => "Queen", "album" => "Live at Wembley", "year" => 1992,"path" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg"],
    ["author" => "Sting", "album" => "Ten Summoner's Tales", "year" => 1993,"path" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg"],
    ["author" => "Steve Gadd Band", "album" => "Steve Gadd Band", "year" => 2018,"path" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg"],
    ["author" => "Iron Maiden", "album" => "Brave New World", "year" => 2000,"path" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg"],
    ["author" => "Eric Clapton", "album" => "One more car, one more raider", "year" => 2002,"path" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg"],
    ["author" => "Deep Purple", "album" => "Made in Japan", "year" => 1972,"path" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg"],
    ["author" => "Metallica", "album" => "...And justice for all", "year" => 1988,"path" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg"],
    ["author" => "Dave Weckl", "album" => "Hard Wired", "year" => 1994,"path" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg"],
    ["author" => "Michael jackson", "album" => "Bad", "year" => 1987,"path" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg"],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vue Js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- Font- Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Style -->
    <link rel="stylesheet" href="dist/css/app.css">
    <title>Spotify - php - Ajax</title>
</head>
<body>
    <div id="root">
        <header>
            <div class="container navbar">
                <img src="dist/img/logo.png" alt="logo"/>
                <ul class="menu"></ul>
            </div>
        </header>

        <main class="cds-container container">
            <?php foreach ($albums as $album) { ?>
                <div class="cd"> 
                    <img src="<?php echo $album["path"]?>" alt="album cover">
                    <h3><?php echo $album["album"]?></h3>
                    <span class="author"><?php echo $album["author"]?></h3></span>
                    <span class="year"><?php echo $album["year"]?></span>
                </div>
            <?php } ?> 
        </main>
    </div>  
</body>
</html>