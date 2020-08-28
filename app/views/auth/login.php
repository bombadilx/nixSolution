<?php session_start(); ?>
<div class="form-login">
    <form action="enter" method="POST">
        <div class="form-login-name">
            <input type="text" name="login" id="login" placeholder="Логин">
        </div>
        <div class="form-login-password">
            <input type="password" name="password" id="password" placeholder="Пароль">
        </div>
        <div class="form-login-button">
            <button type="submit">Вход</button>
        </div>
    </form>
</div>
