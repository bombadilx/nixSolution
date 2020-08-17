<?php

require_once('../components/header.php');
require_once('../components/navigation.php');
require_once('articles.php');

require_once('header.php');
require_once('navigation.php');

?>

<div class="post-list">
    <? foreach ($articles as $value): ?>
    <div class="article">
        <div class="post-list-title">
            <?= $value['title']; ?>
        </div>
        <div class="post-list-image">
            <img width="200" src="<?= $value['image'];?>" alt="картинка-поста">
        </div>
        <div class="post-list-text">
            <?= $value['text'];?>
        </div>
    </div>
    <?php endforeach ?>
</div>

<?php require_once('../components/footer.php'); ?>

<?php require_once('footer.php'); ?>

