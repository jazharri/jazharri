<?php
	echo "test";
	//$url_login = "http://otweb.mncsekuritas.id";
	//$url_login = "http://27.0.199.23:80/ws/client/login?username=@desta&password=554558";
	$url_login = "http://middleware.mncsekuritas.id/ws/client/login?username=webdemo&password=1500899";
echo "tes2";	
	//open connection
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url_login);
	curl_setopt($ch, CURLOPT_POST, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTP);
echo "tes3";
	//execute post
	$json = curl_exec($ch);
echo "tes4";
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
print_r(curl_getinfo($ch));
	var_dump($json); die();
	$data = json_decode($json, true);
	
	curl_close($ch);
?>
