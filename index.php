<?php
$uri = $_SERVER["REQUEST_URI"];
$uri = explode('?', $uri);
$uri = $uri[0];

if ($uri == '/read') {
    include_once 'VIEW/read.php';
}
if ($uri == '/delete-be') {
    include_once 'VIEW/delete-be.php';
}
if ($uri == '/edit-be') {
    include_once 'VIEW/edit-be.php';
}
if ($uri == '/insert-be') {
    include_once 'VIEW/insert-be.php';
}
if ($uri == '/insert') {
    include_once 'VIEW/insert.php';
}
if ($uri == '/edit') {
    include_once 'VIEW/edit.php';
}
