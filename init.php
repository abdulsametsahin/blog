<?php

$_url = "https://abdulsametsah.in";

function asset($path) {
    global $_url;
    return $_url . "/assets/" . $path;
}

function star ($count) {
    for ($i = 0; $i < $count; $i++) {
        echo "<img src='".asset('img/star.svg')."' />";
    }
}