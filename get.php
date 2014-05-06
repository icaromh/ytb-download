<?php
if(isset($_GET['m']) && !empty($_GET['m'])){
    $file = basename(urldecode($_GET['m']));
    header("Content-type: audio/mpeg");
    header("Content-disposition: attachment; filename=" . $file . '.mp3');
    // header("Content-Length: " . filesize('musics/'.$file));
    readfile('musics/'.$file);
    exit;
}