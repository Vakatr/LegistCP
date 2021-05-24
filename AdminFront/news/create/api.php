<?

if ($_REQUEST['submit_create_button'])
{

  $ArCreateData = array(
    'title' => $_REQUEST['heading'],
    'text' => $_REQUEST['description-news']
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
}
?>
