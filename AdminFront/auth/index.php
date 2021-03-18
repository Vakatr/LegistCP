<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php" ?>
<? require $_SERVER['DOCUMENT_ROOT'] . "/auth/api.php" ?>

<? if (!$_SESSION['token']):?>

<?=$arResult['ERRORS']?>
<div class="auth-marg">
  <? if($arResult['ERROR']): ?>

<div id="success">
    <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span><?=$arResult['ERROR']?></span>
        </div>
  </div>

<? endif ?>
  <main class="form-signin" style="text-align: center;">
    <form method="POST">
      <img class="mb-4" src="/img/logo-fullsize.png" alt="" width="300" height="120">
      <h1 class="h3 mb-3 fw-normal">Введите логин и пароль</h1>

      <input type="text" name="inputEmail" class="form-control" value="<?= $_REQUEST['inputEmail']?>" placeholder="Логин" required autofocus>

      <input type="password" name="inputPassword" class="form-control"  placeholder="Пароль" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember" <?if ($_REQUEST['remember']): ?> checked <? endif ?> value="remember_me"> Запомнить меня
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-auth" type="submit">Войти</button>

    </form>
  </main>
</div>
<? else: ?>
<h1>Вы уже авторизировались!</h1>
<? endif ?>

<? require $_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php" ?>
