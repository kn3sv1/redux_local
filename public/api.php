<?php

//die();
$status = [
	'new',
	'in_progress',
	'canceled',
	'completed',
	'done',
];
$template = [
	"id" => 1,
	"status" =>  "new",
	"likes_count" => 20,
	"created_at" => "2020-04-01",
	"title" => "Mercury",
];

$result = ['ideas' => []];
for($i=1;$i <= 25; $i++) {
	$item = $template;
	$item['id'] = $i;
	$item['status'] = $status[rand(0,4)];
	$item['likes_count'] = rand(1,30); 
	$item['created_at'] = date('Y-m-d', strtotime(rand(1,20) . ' day', strtotime($item['created_at'])));
	$item['title'] =  $item['title'] . $i;
	$result['ideas'][] = $item;
}

$result['total'] = count($result);
$result['offset'] = 0;
$result['limit'] = 10;

echo json_encode($result, JSON_PRETTY_PRINT);