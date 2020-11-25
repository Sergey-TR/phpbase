<form class="login_form" method="POST" action="/login">

    <?php if (isset($errorMsg)) : ?>
        <div class="alert alert-danger">
            <?= $errorMsg ?>
        </div>
    <?php endif; ?>
    <input type="hidden" name="csrf_token" value="dsfhjksdfjksjgfdmlhgkjd">
    <div class="form-group">
        <label for="login" class="label_form">Логин</label>
        <input type="text" class="my_account_check" name="login" placeholder="Логин">
    </div>
    <div class="form-group">
        <label for="password" class="label_form">Пароль</label>
        <input type="password" class="my_account_check" name="password" placeholder="Пароль">
    </div>
    <button type="submit" class="my_account_check">LOG IN</button>
    <a href="/registration" class="my_account_cart">Registration</a>
</form>