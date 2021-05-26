<? require $_SERVER['DOCUMENT_ROOT'] . "/init.php" ?>
<? if (substr_count($_SERVER['REQUEST_URI'], '/') <= 3):?>
<? $REQUEST_URI = explode('?', $_SERVER['REQUEST_URI']); ?>
  <? include $_SERVER['DOCUMENT_ROOT'] . $REQUEST_URI[0] . "/api.php" ?>
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
  case '/news/create/':
   $Title = "Добавление новой новости";
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
  case '/applications/':
    $Title = "Список заявок";
  break;
  case '/applications/edit/':
    $Title = "Просмотр заявки";
  break;
 } ?>

  <head>
      <meta charset='utf-8'>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/akrobat.css">
      <script src="/js/jquery-3.6.0.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js" integrity="sha512-JHVzEjx3zsh0SY+F9jc0VlW7VBXeDIJNXR0xcYySu1QLhf+Du8Zx9p28zP5MjIW7onsVy0qMsVls0YO6GTg2Aw==" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css" integrity="sha512-asx/ybAODdXFwxJdEHxddlVX1jXadezKmKu89YvodVg3VQWEKAi30yd4f3r8V3pljdyACyE7IJCy6mrKuDOXjQ==" crossorigin="anonymous" />

      <script src="/js/script.js"></script>
      <link rel="stylesheet" href="style.css">

      <title><?= $Title; ?></title>
  </head>

  <body>


    <? if ($URL != "/auth/"): ?>
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
                      <li><a href="/applications" class="root-item">Заявки</a></li>
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
    <div class="block-link-site">
      <a href='#' target="_blank" class="inner-block-link">Вернуться на основную версию сайта</a>
    </div>
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
