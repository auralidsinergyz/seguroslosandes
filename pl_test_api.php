<?php
$url = 'https://api.instapago.com/payment';
$fields = array("KeyID" => "802123A0-B710-4FC8-AD5E-58E85A256477" , "PublicKeyId" => "00069c65484c63c4c8a380c095f6ed16", "Amount" => "24.07","Description" => "Pago de Poliza","CardHolder"=> "Proyecto Pago En Linea","CardHolderId"=> "12345678", "CardNumber" => "4111111111111111", "CVC" => "999",
"ExpirationDate" => "07/2022", "StatusId" => "2", "Address" => " ", "City" => " ", "ZipCode" => "
", "State" => " " );
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url );
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;
?>