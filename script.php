<?php

$Directory = new RecursiveDirectoryIterator('./tst');
$Iterator = new RecursiveIteratorIterator($Directory);
$Regex = new RegexIterator($Iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);$files = array();
foreach ($Iterator as $info) {
//   if (...custom conditions...) {
    $files[] = $info->getPathname();
//   }
}


var_dump($files);
?>