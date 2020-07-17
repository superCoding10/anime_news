<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/commonStyles.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js" defer></script>
    <script src="js/common.js" defer></script>
    <title>Document</title>
</head>
<body>
<?php 
    include_once "partials/header.php";
    include_once "partials/footer.php";
    include_once "partials/nav.php";
    // A STRINGIFIED RANDOM NEWS SEPARATED BY A | WHERE FIRST PART IS TITLE SECOND IS DESCRIPTION AND THIRD IOS IMG NAME
    include_once "get_news/get_random_news.php";
    $decoded_rand_news = array_combine(["title", "description", "img_name"], explode("|", $stringified_rand_news));
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

        <div class="random_news_card">  
        <h3>Random news</h3>  
            <div class="card">
                <!-- CURR IMG -->
                <img id="card_curr_img" src="/model/add_post/images/<?= $decoded_rand_news["img_name"];?>" alt="random_news_img" style="height: 175px;transition: all 1s;">
                <!-- NEW IMG -->
                <img id="card_new_img" src="" style="position: absolute;height: 175px;transition: all 1s;opacity: 0;" alt="random_news_img">

                <div class="card_text_content">
                <!-- CURR HEADER -->
                    <p style="transition: all 1s;padding:0 5px;" id="card_curr_header"  class="card_header text-center"><?= $decoded_rand_news["title"];?></p>
                <!-- NEW HEADER -->
                    <p id="card_new_header" style="position: absolute;opacity: 0;padding: 0 7px; width: 284px;top: 175px;transition: all 1s;" class="card_header text-center"></p>

                    <p class="card_body" style="word-break: break-all;"><?= $decoded_rand_news["description"];?>...</p>
                </div>
                <button type="button" class="btn btn-outline-info read_news_btn">Read</button>
            </div>
        </div>

</div>
