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
      'file' => $response->key ? $response->key : $server_answer->file
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
