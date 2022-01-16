<?php
$url = "http://localhost/PWDProjek/daftarproduk_json.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "No : " . $r->no . "<br />";
 echo "ID : " . $r->id . "<br />";
 echo "Nama : " . $r->nama . "<br />";
 echo "Harga : " . $r->harga . "<br />";
 echo "</p>";
}