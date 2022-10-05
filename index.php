<?php
$url = 'http://pi.hole/admin/api.php?status';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);

$data = curl_exec($curl);

curl_close($curl);

if ($data = '{"status":"enabled"}') {
  echo "Pihole is UP!";
} else {
  echo "uh... Looks like Pihole is DOWN!";
}
