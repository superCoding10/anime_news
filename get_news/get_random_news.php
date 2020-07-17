<?php
// GET MIXED NEWS INTO AN ARRAY
$news = json_decode( "[" . file_get_contents("model/add_post/mixed.txt") . "]", true);
// CREATE A RANDOM NUMBER TO GET A RANDOM NEWS
$rand_news = $news[rand(0, count($news) - 1)];
// PREPARE THE RAND NEWS FORS ENDING TO RECEIVER
$stringified_rand_news = "{$rand_news['title']}|{$rand_news['description']}|{$rand_news['img_name']}";


if(isset($_POST)) {
// GET MIXED NEWS INTO AN ARRAY
$news = json_decode( "[" . file_get_contents("../model/add_post/mixed.txt") . "]", true);
// CREATE A RANDOM NUMBER TO GET A RANDOM NEWS
$rand_news = $news[rand(0, count($news) - 1)];
// PREPARE THE RAND NEWS FORS ENDING TO RECEIVER
 echo "{$rand_news['title']}|{$rand_news['description']}|{$rand_news['img_name']}";
    
}


