<?php

// GET MIXED NEWS INTO AN ARRAY
$all_news = json_decode( "[" . file_get_contents("../db/add_post/mixed.txt") . "]", true);
// CREATE A RANDOM NUMBER TO GET A RANDOM NEWS
$rand_num = rand(0, count($all_news) - 1);
// SEND THE RAND NEWS 
// header("Accept: charset=utf-8");
header("Access-Control-Allow-Credentials: false");
header("Set-Cookie: n=v");
// echo 123;
if($_SERVER['HTTP_ACCEPT'] === "application/json") {
    echo json_encode($all_news[$rand_num]), json_encode(getallheaders());
} else if ($_SERVER['HTTP_ACCEPT'] === "text/xml") {
    echo "<users><user>first</user></users>";
} else {
    echo "wrong";
}

