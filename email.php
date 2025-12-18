<?php
$file = 'data/kimat/pvmt/hkr/pass/usq/hkrpanel/hkrpixleb.json';
$jsonString = file_get_contents('data/kimat/pvmt/hkr/pass/usq/hkrpanel/hkrpixleb.json');
$data = json_decode($jsonString);
$content = json_decode($jsonString, true);

$email = $data->email;
$name = $data->name;
$senderMail = $data->sender;


$sender = "From: $name <$senderMail>";

$emailku = "$email";
?>