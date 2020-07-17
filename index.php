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

<div class="search_news_wrapper" style="margin: 132px 0 0 25%;
display: flex;">
<input type="text" placeholder="Search news..." style="width: 36%;
background: transparent;
border-radius: 8px;
border-color: #17a2b8;
height: 50px;
padding-left: 12px;
color: #f1f2f2;
font-size: 20px;
margin-right: 17px;
padding-right: 10px;">
<button style="font-size: 24px;" class="btn btn-outline-info">Search</button>
</div>

<div style="position: absolute; top: 170px; right: 6%;" class="random_news_card">  
<h3 style="color: #53e8e8;margin-bottom: 17px;">Random news</h3>  
    <div class="card second_card" style="
            background: #26252561;
            width: 283px;
            color: #fbfbfb;
            border: 1px solid white;
            padding: 0px;">
        <img src="/user_images/current_img.jpg" alt="" style="width: 100%;">
        <div>
        <p style="font-size: 24px; text-align: center; margin-top: 22px;">asd asd sadsad asd sad sadsad sad sa d</p>
        <p style="margin: 12px; margin-top: 12px; font-size: 19px; margin-top: 0;">asd asd sadsad asd sad sadsad sad sa dasd asd sad asd sad asd sad asd asd ...</p>
        </div>
        <button type="button" class="btn btn-outline-info read_news_btn" style="margin: 5px">Read</button>
    </div>
</div>

</div>
