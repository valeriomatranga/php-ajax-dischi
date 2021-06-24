<!-- 
Stampare a schermo una decina di dischi musicali (vedi screenshot vue-dischi).
Utilizzare: Html, Sass, JS, VueJS, PHP
-->
<!-- 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
-->
<!-- 
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
-->
<!-- 
Bonus: Attraverso un’altra chiamata api, filtrare gli album per genere ( 
-->
<?php
require __DIR__ . './database/db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PHP-AJAX-DISCHI</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CDN fontawesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/app.css">
  </head>
  <body>
    <div id="app" class='dischi'>
        <?php
        foreach ($dischi as $disco) : ?>

        <div class="lista_album">
            <div class='album'>
                <img src="<?php echo $disco['poster'];?>" alt="">
                <h3><?php echo $disco['title']; ?></h3>
                <div class="descrizione">
                    <span><?php echo $disco['author']?></span>
                    <span><?php echo $disco['year']?></span>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </div>

    <!-- CDN vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- CDN ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
    integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- js -->
    <script src="./assets/js/app.js"></script>
    </body>
</html>