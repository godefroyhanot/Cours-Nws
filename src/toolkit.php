<?php 

function dd(...$debugs){
    echo "<pre>";
    foreach ($debugs as $key => $debug) {
        var_dump($debug);
    }
    echo "</pre>";
    die();
}