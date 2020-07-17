<?php 
$path = "../user_images";
$dir = opendir($path);
while(false !== ($fname = readdir($dir))) {
    if($fname !== "." && $fname !== "..") {

        if($fname !== "current_img.jpg") {
            unlink("$path/$fname");
        }
    }
}
