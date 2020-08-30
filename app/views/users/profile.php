<div class="profile">
    <?php
    if(isset($_SESSION['login'])) 
    {
    ?>
    <div class="profile-name">
        Имя пользователя: <?= $_SESSION['login']; ?>
    </div>
    <div class="profile-image">
        <img width="400px" src="app/image/<?= $vars['img']; ?>" alt="фото пользователя">
        <form action="create" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Изменить аватарку</button>
        </form>
    </div>
    <div class="profile-status">
        <form action="status" method="POST">
        Статус пользователя : <input type="text" name="status" value="<?= $vars['status']; ?>">
        <button type="submit">Изменить статус</button>
        </form>
    </div>
    <? } else echo "Вы должны быть авторизированы"; ?>
</div>