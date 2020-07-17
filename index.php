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
                <img id="card_curr_img" src="/user_images/current_img.jpg" alt="random_news_img" style="height: 175px;transition: all 1s;">
                <!-- NEW IMG -->
                <img id="card_new_img" src="/user_images/1.jpg" style="position: absolute;height: 175px;transition: all 1s;opacity: 0;" alt="random_news_img">

                <div class="card_text_content">
                <!-- CURR HEADER -->
                    <p style="transition: all 1s;" id="card_curr_header"  class="card_header text-center">asd asd sadsad asd sad sadsad sad sa d</p>
                <!-- NEW HEADER -->
                    <p id="card_new_header" style="position: absolute;opacity: 0;padding: 0 7px; width: 284px;top: 175px;transition: all 1s;" class="card_header text-center">Using this kind of material will lead you to...</p>

                    <p class="card_body">asd asd sadsad asd sad sadsad sad sa dasd asd sad asd sad asd sad asd asd ...</p>
                </div>
                <button type="button" class="btn btn-outline-info read_news_btn">Read</button>
            </div>
        </div>

</div>
