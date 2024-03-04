<?php
require("functions.php");

$dns = "mysql:host=localhost;port=3306;dbname=blogs_kristians_mikelsons;user=root;password=;charset=utf8mb4";

$connect = new PDO($dns);

$query = $connect->query("SELECT * FROM posts");

$posts = $query->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($posts);
header('Content-Type: application/json');

echo $json;
