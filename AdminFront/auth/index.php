<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>

<div class="auth-marg">
  <main class="form-signin" style="text-align: center;">
    <form method="POST">
      <img class="mb-4" src="/img/logo-fullsize.png" alt="" width="300" height="120">
      <h1 class="h3 mb-3 fw-normal">Введите логин и пароль</h1>

      <input type="email" name="inputEmail" class="form-control" value="<?= $_REQUEST['inputEmail']?>" placeholder="Email адрес" required autofocus>

      <input type="password" name="inputPassword" class="form-control" value="<?= $_REQUEST['inputPassword']?>" placeholder="Пароль" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember" <?if ($_REQUEST['remember']): ?> checked <? endif ?> value="remember_me"> Запомнить меня
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-auth" type="submit">Войти</button>
    </form>
  </main>
</div>
<? print_r($_REQUEST);?>
<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
