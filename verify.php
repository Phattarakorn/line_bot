<?php
$access_token = 'ApHpsvbLDyJUKEYCRPCHf9puuGTBi5anK8jPrieYlUTxc1Bji2NY362Jjuljmq/pl525SO+TT1FtWjNf6UeDbMl5UWugrUlr95rJ8sAQ9gW4Bh7XpSDFl4KiXzmq/CGdhmQxiQS399bx/dDqHd5E7wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
