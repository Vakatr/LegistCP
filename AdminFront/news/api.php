<?

if ($_REQUEST["DELETE"])
{
  $url = $SERVER_URL . '/news/delete/' . $_REQUEST['ID_NEWS'];
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
  "Accept: application/json",
  "Authorization: Bearer " . $_SESSION['token']
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_exec($curl);
  curl_close($curl);
}

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
$server_answer = json_decode($resp);


?>
