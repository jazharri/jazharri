<?php
	//$url_login = "http://27.0.199.23:80/ws/client/login?username=webdemo&password=1500899";
	$url_login = "http://middleware.mncsekuritas.id/ws/client/login?username=webdemo&password=1500899";
	
	//open connection
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url_login);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/cookies.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/cookies.txt');
	//execute post
	$json = curl_exec($ch);
	//var_dump($json); die();
	$data = json_decode($json, true);
	
	$token = $data['access_token'];
	
	//////////////////////////////////////////////////////////////////////////
	curl_close($ch);


	
	$url_retrieve = "http://middleware.mncsekuritas.id/ws/upload/get_data_client?id=".$_POST['kode_nasabah']."&email=".$_POST['email'];
	//$url_retrieve = "http://middleware.mncsekuritas.id/ws/upload/get_data_client?id=".$kode_nasabah."&email=".$email;
	//$url_retrieve = "http://27.0.199.23:80/ws/upload/get_data_client?id=".$_POST['id']."&email=".$_POST['email'];
	//$url_retrieve = "http://27.0.199.23:80/ws/upload/get_data_client?id=0009355&email=cakrasenadesta@yahoo.com";
	$ch = curl_init();
	//set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url_retrieve);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "");
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Authorization: Bearer '.$token));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/cookies.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/cookies.txt');
	//execute post
	$json = curl_exec($ch);
	//var_dump($json); die();
	$data = json_decode($json, true);
	
	print $json;
	$name = $data['Name'];	
	$phone2 = $data['Phone2'];
	
	
	curl_close($ch);
?>
