<?php
require __DIR__ . '/src/template/head.php';
require __DIR__ . '/src/template/header.php';
?>

<div id="app">
<h1>API</h1>

    <div id="ricerca">
        <label for="">categoria</label>
        <select class="categoria" v-model="genereMusicale">
            <option value="All">All</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Jazz">Jazz</option>
            <option value="Metal">Metal</option>
        </select>
    </div>
    
    <div class='dischi'>
        <div class="lista_album">
            <div class="album" v-for="disco in categoria">
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

