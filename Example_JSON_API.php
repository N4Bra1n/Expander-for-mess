<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	file_put_contents('data.txt', json_encode($_GET)); // chỗ này sẽ track lại data
	$response = [];
	$response['message'] = 'éc éc'; // đây là example response
	echo json_encode($response);
?>