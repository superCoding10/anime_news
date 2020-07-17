<?php
function get_post_by_path($path, $get_latest = false) {
    $data = json_decode("[" . file_get_contents($path) . "]", true);
    if($get_latest) {
        $posts = [];
        for($i = 0; $i < count($data); $i++) {
            $posts[] = $data[count($data) - ($i + 1)];
        }
        return $posts;
    }
    shuffle($data);
    return $data;
}