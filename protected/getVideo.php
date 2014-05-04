<?php 
if(isset($_POST['address'])):
    $res = exec('./youtubeDown.sh ' . $_POST['address']);
    $res = urlencode($res);
    echo $res;
    exit;
endif;