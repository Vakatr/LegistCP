<?session_start();
  $GLOBALS['SERVER_URL'];
  $SERVER_URL = "https://testserverv.herokuapp.com/api/v1";
  function check_domain_availible($domain)
  {
  if (!filter_var($domain, FILTER_VALIDATE_URL))
    return false;
  $curlInit = curl_init($domain);
  curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 1);
  curl_setopt($curlInit, CURLOPT_HEADER, true);
  curl_setopt($curlInit, CURLOPT_NOBODY, true);
  curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curlInit);
  curl_close($curlInit);
  if ($response)
    return true;
  return false;
  }

  if (check_domain_availible($SERVER_URL))
  {
    if ($_SERVER['REQUEST_URI'] != '/auth/' && $_SESSION['user_auth'] == "N")
    {
        header('Location: /auth/');
    }
    else
    {
      if (!($_SESSION['user_auth'] && $_SESSION['token']))
      $_SESSION['user_auth'] = "N";

      if (!isset($_SESSION['token']))
      {
        $data = ["name" => $_REQUEST['inputEmail'], "password" => $_REQUEST['inputPassword']];
        $data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
        $curl = curl_init($SERVER_URL . '/auth/login');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
           'Content-Type: application/json',
           'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($curl);
        curl_close($curl);
        $server_answer = json_decode($result);

      if ($server_answer->token && $server_answer->role == 'ADMIN')
      {
        header('Location: /');
      }
      }
    }
  }
  else
  {
    echo 'Сервер не доступен';
    exit;
  }

  if ($_REQUEST['login_out'])
  {
    $_SESSION['user_auth'] = "N";
    session_destroy();
    header('Location: /auth/');
  }

  ?>
