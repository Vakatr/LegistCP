<?

if ($_REQUEST['submit_create_button'])
{

  if ($_FILES['file-news']['error'] == '0')
  {
    $url = $SERVER_URL . '/file/upload';
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($_FILES['file-news']['tmp_name']))
  ));

    $response = curl_exec($curl);
    $response = json_decode($response);
    curl_close($curl);
  }

  $ArCreateData = array(
    'title' => $_REQUEST['heading'],
    'text' => $_REQUEST['description-news'],
    'file' => $response->key ? $response->key : ""
  );
  $ArCreateDataJson = json_encode($ArCreateData);

  $url = $SERVER_URL . '/news/create';
  $curl = curl_init($url);

  $headers = array(
  "Content-Type: application/json",
  "Authorization: Bearer " . $_SESSION['token']
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $ArCreateDataJson);
  curl_exec($curl);
  $status_answer = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);

  if ($status_answer == '201')
  {
    $arResult["SUCCESS"] = 'Новая новость успешно добавлена.';
  }
  else
  {
    $arResult["SUCCESS"] = "Внутренняя ошибка сервера. Попробуйте позже.";
  }
}
?>
