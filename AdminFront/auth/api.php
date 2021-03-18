<?


  if ($_REQUEST['inputEmail'] && $_REQUEST['inputPassword'])
  {
    if ($server_answer->token && $server_answer->role == 'ADMIN')
    {

      $_SESSION['token'] = (string) $server_answer->token;

      $_SESSION['user_auth'] = 'Y';
      $_REQUEST['AUTH_IS'] = "Y";
      $arResult['ERROR'] = 'Вы успешно вошли';
    }
    elseif($server_answer->token && $server_answer->role != 'ADMIN')
    {
      $_SESSION['user_auth'] = 'N';
      $arResult['ERROR'] = 'Вы не являетесь администатором!';
    }
    elseif (!$server_answer->role)
    {
      $arResult['ERROR'] = 'Неверный логин или пароль';
      $_SESSION['user_auth'] = 'N';
    }
  }
?>
