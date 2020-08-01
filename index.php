<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <title>Document</title>
</head>
<body>
<?php

    include_once "partials/header.html";
    include_once "partials/nav.html";

    // GET ALL NEWS AND DECODE THEM INTO A SIMPLE ARRAY
    $all_news = json_decode( "[" . file_get_contents("db/add_post/mixed.txt") . "]", true);
    // GENERATE A RANDOM NUMBER TO GET A RANDOM NEWS
    $rand_num = rand(0, count($all_news) - 1);
    // GET A RANDON NEWS
    $rand_news = $all_news[$rand_num];
?>
    <div class="wrapper">

        <div class="welcome_block">
            <h1>THE MOST ACTUAL ANIME AND MANGA NEWS!</h1>
            <p>Here you will find everything you want to know about anime culture, anime art, anime adaptation and more</p>
            <button type="button" class="btn btn-outline-info read_news_btn">Read news</button>
        </div>

        <div class="search_news_wrapper">
            <input type="text" placeholder="Search news...">
            <button class="btn btn-outline-info">Search</button>
        </div>

        <div class="random_news_card " >  
            <h3>Random news</h3>  
            <div class="card">
                <div class="card_img_wrapper">
                    <!-- PREV CARD IMG ARROW -->
                    <svg style="position: absolute;z-index:777799999;cursor:pointer;display: none;font-size: 50px;top: 63px;left: 13px;color: #121313;transition: all .15s ease-in-out;" width="1em" height="1em" viewBox="0 0 16 16" class="prev_news_arrow bi bi-box-arrow-in-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.854 11.354a.5.5 0 0 0 0-.708L5.207 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0 0 1h9A.5.5 0 0 0 15 8z"/>
                        <path fill-rule="evenodd" d="M2.5 14.5A1.5 1.5 0 0 1 1 13V3a1.5 1.5 0 0 1 1.5-1.5h8A1.5 1.5 0 0 1 12 3v1.5a.5.5 0 0 1-1 0V3a.5.5 0 0 0-.5-.5h-8A.5.5 0 0 0 2 3v10a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V13a1.5 1.5 0 0 1-1.5 1.5h-8z"/>
                    </svg>
                    <!-- NEXT CARD IMG ARROW -->
                    <svg style="position: absolute;z-index:777799999;cursor:pointer;display: none;font-size: 50px;top: 63px;left: 216px;color: #121313;transition: all .15s ease-in-out;" width="1em" height="1em" viewBox="0 0 16 16" class="next_news_arrow bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
                        <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
                    </svg>
              
                    <!-- CURR IMG -->
                    <img id="card_curr_img" class="news_card_img" src="/db/add_post/images/<?= $rand_news["img_name"];?>" alt="random_news_img" style="cursor: pointer;height: 175px;z-index:213213;transition: all 1s;">
                    <!-- NEW IMG -->
                    <img class="news_card_img" id="card_new_img" src="" style="z-index:213123;top: 0;position: absolute;height: 175px;transition: all 1s;opacity: 0;cursor: pointer;" alt="random_news_img">
                </div>
                <div class="card_text_content">
                <!-- CURR HEADER -->
                    <p style="transition: all 1s;padding:0 5px;margin-bottom: 20px;" id="card_curr_header"  class="card_header text-center"><?= $rand_news["title"];?></p>
                <!-- NEW HEADER -->
                    <p id="card_new_header" style="position: absolute;padding: 0 7px; width: 284px;top: 175px;transition: all 1s;" class="card_header text-center zeroOpacity"></p>


                    <!-- CURR DESCRIPTION -->
                    <p id="card_curr_description" class="card_body" style="transition: all 1s;word-break: break-all;"><?= $decoded_rand_news["description"];?>.asd asd asdasd asd asd asd asd asd asd asd..</p>
                    <!-- NEW DESCRIPTION -->
                    <p id="card_new_description" class="card_body zeroOpacity" style="word-break: break-all;"><?= $decoded_rand_news["description"];?>.asd asd asdasd asd asd asd asd asd asd asd..</p>
                </div>
                <button type="button" class="btn btn-outline-info read_news_btn">Read</button>
            </div>
        </div>

</div>
<?php 
// namespace Api;
// const a = 33

?>
<?php include_once "partials/footer.html";?>