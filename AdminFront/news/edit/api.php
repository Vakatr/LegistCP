<?
if ($_REQUEST['id'])
{
  $url = $SERVER_URL . '/news/listnews/';
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
  $objects_answer = json_decode($resp);
  foreach ($objects_answer as $key => $value) {
    if ($value->id == $_REQUEST['id'])
    {
      $server_answer = $objects_answer[$key];
    }
  }
}

if ($_REQUEST['submit_update_button'] && $_REQUEST['id'])
{



    $ArCreateData = array(
      'title' => $_REQUEST['heading'],
      'text' => $_REQUEST['description-news']
    );
    $ArCreateDataJson = json_encode($ArCreateData);

  $url = $SERVER_URL . '/news/update/' . $_REQUEST['id'];
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
    $arResult["SUCCESS"] = 'Новость успешно обновлена.';
  }






}
?>
