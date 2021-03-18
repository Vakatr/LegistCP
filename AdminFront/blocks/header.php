<? require $_SERVER['DOCUMENT_ROOT'] . "/init.php" ?>
<? if (substr_count($_SERVER['REQUEST_URI'], '/') <= 2):?>
  <? include $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] . "/api.php" ?>
<? endif ?>
<!DOCTYPE html>
<html lang='ru'>
<?
$URL = explode ("?", $_SERVER['REQUEST_URI']);
$URL = $URL[0];
switch ($URL){
   case '/':
    $Title = "Главная";
   break;
  case '/news/':
   $Title =  "Список новостей";
  break;
  case '/news/edit/':
   $Title = "Редактирование новости";
  break;
  case '/users/edit/':
   $Title = "Редактирование пользователя";
  break;
  case '/users/':
   $Title = "Пользователи";
  break;
  case '/auth/':
   $Title = "Авторизация";
  break;
 } ?>

  <head>
      <meta charset='utf-8'>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/akrobat.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="/js/jquery-3.6.0.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="/js/script.js"></script>
      <link rel="stylesheet" href="style.css">
      <title><?= $Title; ?></title>
  </head>

  <body>


    <? if (!($URL == "/auth/")): ?>
    <header class="large font-style-header">
        <div class="container">
            <div class="row">
        			<div class="col-md-3">
                <div class="logo js-logo">
        				      <a href="/" class="logo-img js-logo-img"></a>
                </div>
        			</div>

              <div class="col-md-7 main-menu">
          				<ul class="nav">
        						<li><a href="/users" class="root-item">Пользователи</a></li>
                    <li><a href="/news" class="root-item">Новости</a></li>
          				</ul>
              </div>

              <div class="col-md-2">
                <div class="txt-right">
                  <form method="POST">
              	     <input type="submit" name="login_out" class="personal" value='Выйти' />
                 </form>
                </div>
              </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-12 js-marg">
          <div class="title_page">
            <h1>
            <?= $Title; ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  <? endif ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
