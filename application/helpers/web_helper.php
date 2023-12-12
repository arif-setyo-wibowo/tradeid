<?php

function strtodash($string) {
    $url_friendly_string = url_title($string, 'dash', true);

    echo $url_friendly_string;
}