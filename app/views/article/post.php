
<div class="post-list">
    <?php foreach ($vars['articles'] as $value): ?>
    <div class="article">
        <div class="post-list-title">
            <?= $value['title']; ?>
        </div>
        <div class="post-list-image">
            <img width="200" src="app/image/<?= $value['img'];?>" alt="картинка-поста">
        </div>
        <div class="post-list-text">
            <?= $value['descriptions'];?>
        </div>
    </div>
    <?php endforeach ?>
</div>