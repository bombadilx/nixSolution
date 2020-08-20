
<div class="post-list">
    <?php
    //var_dump($vars['articles']);
    foreach ($vars['articles'] as $value): 
    ?>
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
    <?php endforeach 
    ?>
</div>