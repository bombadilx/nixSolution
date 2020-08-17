<?php

require_once('../components/header.php');
require_once('../components/navigation.php');
?>

<div class="form-login">
    <div class="form-login-name">
        <input type="text" name="login" id="login" placeholder="Логин">
    </div>
    <div class="form-login-password">
        <input type="password" name="password" id="password" placeholder="Пароль">
    </div>
    <div class="form-login-button">
        <button>Вход</button>
    </div>
</div>

<?php

require_once('../components/footer.php');

?>
