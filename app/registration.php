<?php

require_once('../components/header.php');
require_once('../components/navigation.php');
?>

<div class="form-registration">
    <div class="form-registration-name">
        <input type="text" name="login" id="login" placeholder="Логин">
    </div>
    <div class="form-registration-password">
        <input type="password" name="password" id="password" placeholder="Пароль">
    </div>
    <div class="form-registration-button">
        <button>Регистрация</button>
    </div>
</div>

<?php

require_once('../components/footer.php');

?>
