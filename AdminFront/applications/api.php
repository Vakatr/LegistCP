<?
if ($_REQUEST["UPDATE_APP"])
{
  $ArCreateData = array(
    'requestText' => $_REQUEST['REQUEST_TEXT'],
    'decision' => $_REQUEST['DECISION_TEXT'],
    'status' => $_REQUEST['STATUS_' . $_REQUEST['ID_ZAYAVKA']],
    'file' => $_REQUEST['FILE_KEY']
  );
  $ArCreateDataJson = json_encode($ArCreateData);

  $url = $SERVER_URL . '/legist/update/' . $_REQUEST['ID_ZAYAVKA'];
  $curl = curl_init($url);

  $headers = array(
  "Content-Type: application/json",
  "Authorization: Bearer " . $_SESSION['token']
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
  curl_setopt($curl, CURLOPT_POSTFIELDS, $ArCreateDataJson);
  curl_exec($curl);
  $status_answer = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);
  if ($status_answer == '200')
  {
    $arResult["SUCCESS"] = 'Заявка №' . $_REQUEST['ID_ZAYAVKA'] . ' успешно обновлена.';
  }
  else {
    $arResult["SUCCESS"] = 'Внутренняя ошибка сервера. Попробуйте позже.';
  }
}

    $url = $SERVER_URL . '/legist/list';
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
    "Accept: application/json",
    "Authorization: Bearer " . $_SESSION['token']
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    $server_answer = json_decode($resp);




?>
