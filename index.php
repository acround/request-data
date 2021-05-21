<?php
$out = [];
$out['protocol'] = $_SERVER['SERVER_PROTOCOL']; //  Протокол
$out['method'] = $_SERVER['REQUEST_METHOD'];    //  Метод
$out['headers'] = getallheaders();              //  Заголовки
$out['path'] = $_SERVER['REQUEST_URI'];         //  query
$out['get'] = $_GET;                            //  GET-параметры
$out['post'] = $_POST;                          //  POST-параметры
$out['post_raw'] = file_get_contents('php://input');    //  "сырые" POST-параметры

header('Content-Type: application/json');
echo json_encode($out);