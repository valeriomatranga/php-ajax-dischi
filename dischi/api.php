<?php
require __DIR__ . './src/template/head.php';
require __DIR__ . './src/template/header.php';
?>

<div id="app">
    <div class='dischi'>
        <div class="lista_album">
            <div class="album" v-for="disco in dischi">
                <img :src="disco.poster" alt="">
                <h3>{{disco.title}}</h3>
                <div class="descrizione">
                    <span>{{disco.author}}</span>
                    <span>{{disco.year}}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require __DIR__ . './src/template/script.php';
?>

