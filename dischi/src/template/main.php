<h1>PHP</h1>
<main class='dischi'>
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
</main>
