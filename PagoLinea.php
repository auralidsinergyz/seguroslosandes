<?php
$url = 'https://api.instapago.com/payment';

$fields = array("KeyID" => "802123A0-B710-4FC8-AD5E-58E85A256477",
                "PublicKeyId" => "00069c65484c63c4c8a380c095f6ed16",
                "Amount" => urlencode($_POST['p_t07']),
                "Description" => "Pago de Poliza",
                "CardHolder"=> urlencode($_POST['p_t05']),
                "CardHolderId"=> urlencode($_POST['p_t06']),
                "CardNumber" => urlencode($_POST['p_t01']),
                "CVC" => urlencode($_POST['p_t02']),
                "ExpirationDate" => urlencode($_POST['p_t03'])."/".urlencode($_POST['p_t04']),
                "StatusId" => "2",
                "Address" => " ",
                "City" => " ",
                "ZipCode" => " ",
                "State" => " ");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;
?>
