<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/commonStyles.css">
    <link rel="stylesheet" href="../css/addPostPage.css">
    <?php include_once "../partials/bootstrap.html" ;?> 
    <script src="../js/common.js" defer></script>
    <script src="../js/addPost.js" defer></script>
    <title>Document</title>
</head>
<body>


<?php
include_once "../partials/nav.php";
?>

<div class="form_container">

    <form action="/model/add_post/add_post.php" method="POST" enctype="multipart/form-data">

        <h3>Upload Files</h3>

        <div class="preview">
            <div>
                
                <div class="title">
                    <span>Title</span>
                    <input type="text" name="title" maxlength="90">
                </div>
                
                <div class="description">
                    <span>Description</span>
                    <textarea id="" cols="30" rows="10" name="description"></textarea>
                </div>

            </div>
        </div>

        <div class="file" style="display: none;">
            <input type="file" id="file" name="file" accept=".png, .jpg">
        </div>

        <div class="label_wrapper">
            <label for="file" id="file_label">Add image</label>
            <div class="cancel_img">Cancel</div>
        </div>

        <div class="select_cat">
            <button type="button" class="select_cat_manga">Manga</button>
            <button type="button" class="select_cat_anime">Anime</button>
            <button type="button" class="select_cat_exclusive">Exclusive</button>
        </div>

        <button type="submit" name="go">Submit</button>

        <input type="hidden" name="cat" id="cat">

    </form>
</div>

