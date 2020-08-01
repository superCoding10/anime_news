<?php 
// header("Content-Type: text/customType");
// header("x-name: header");
// echo json_encode(getallheaders());
// print_r($_POST);
// echo "<br>";
// print_r($_FILES);
if($_POST) {

    var_dump($_POST);
    $cat = $_POST['cat'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $img_name = time() . ".jpg";
    if(is_uploaded_file($tmp_name) && preg_match("/^(image)/", $_FILES['file']['type'])) {
        move_uploaded_file($tmp_name, "images/$img_name");
    } else {
        $img_name = "";
    }

    $json_feed->title = $_POST['title'];
    $json_feed->description = $_POST['description'];
    $json_feed->img_name = $img_name;


    if($cat === "exclusive") {
        file_put_contents("$cat.txt", json_encode($json_feed));
    } else {

    if(strlen(file_get_contents("$cat.txt")) === 0) {
        file_put_contents("$cat.txt", json_encode($json_feed));
    } else {
        file_put_contents("$cat.txt", "\n, " . json_encode($json_feed) , FILE_APPEND);
    }

    if(strlen(file_get_contents("mixed.txt")) === 0) {
        file_put_contents("mixed.txt", json_encode($json_feed));

    } else {
        file_put_contents("mixed.txt", "\n, " . json_encode($json_feed) , FILE_APPEND);

    }
       
    }




    header("Location: /");
 
} else {
    echo "<h3>Page Not Found</h3>";
}