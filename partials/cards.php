<?php
include __DIR__ . '/../server/db.php';
foreach ($cards as $card) : ?>
    <div class="col p-1 mt-3 mx-2 text-center">
        <img class="img-fluid mb-1 p-3" src="<?= $card['poster'] ?>" alt="<?= $card['title'] ?>" />
        <h1 class="fs-5 text-white text-uppercase">
            <?= $card['title'] ?>
        </h1>
        <h2 class="fs-6">
            <?= $card['author'] ?>
        </h2>
        <h3 class="fs-6">
            <?= $card['year'] ?>
        </h3>
    </div>

<?php endforeach ?>