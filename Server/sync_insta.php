<?php
	$userid = "USER-ID-GOES-HERE";
	$accessToken = "ACCES-TOKEN-GOES-HERE";
	$url = "https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	$result = curl_exec($ch);
	curl_close($ch); 
	$result = json_decode($result);
?>