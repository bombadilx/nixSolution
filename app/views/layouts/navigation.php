<div class="nav">
    <div class="nav-login">
    <?php
        if(isset($_SESSION['login'])) {
            echo "Пользователь: ".$_SESSION['login'];
            echo "<a href='logout'> Выход</a>";
        } else {
            echo "<a href='login'>Логин</a>";
        }
    ?>
    </div>
    <div class="nav-registration">
        <a href="registration">Регистрация</a>
    </div>
    <div class="nav-post-list">
        <a href="post">Список постов</a>
    </div>
    <div class="nav-profile">
        <a href="profile">Профиль</a>
    </div>
</div>

<?php
