<?php
header('Content-Type: application/json; charset=utf-8');
$config=require __DIR__.'/config.php';
try{$pdo=new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'].';charset=utf8mb4',$config['db_user'],$config['db_pass'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);}catch(Throwable $e){http_response_code(500);echo json_encode(['error'=>'Database connection failed']);exit;}
function body(){return json_decode(file_get_contents('php://input'),true)??[];} function out($x){echo json_encode($x,JSON_UNESCAPED_UNICODE);exit;}
