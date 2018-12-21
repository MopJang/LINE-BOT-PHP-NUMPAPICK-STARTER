<?php
$access_token = '/gkTqeHqRm/ZXGcu2uduTNwsyXxguamxSPyMGDdlReM+gM58IH2k2PaF7cszVSMzLnvoxGnu2FrVUqseM/RSwY4F/pUZqSbCjdAece2YmCHpAVznR/yNfpa3pWZVNoOvOn4wB1kOaM/Bdaf5sNBbgQdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v2/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

