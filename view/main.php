<?php require_once './controller/router.php';

$addresse = $_SERVER['REQUEST_URI'];

route_request($addresse);