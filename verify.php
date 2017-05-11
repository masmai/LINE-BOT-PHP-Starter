<?php
$access_token = 'dU/Z+pTwW+3+pROpO05LiHG7t0VQHzveISlPCkolyRxYTPohY7LJ22mXFeq18j7sdP9+F3eeBsYb3mTVM7m6VrBcPzWls1zyx5O8yd4vIUMVfCclJqivq679gVMK+XSkvw7CVTovmAiIQ4TZRW0qvQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
