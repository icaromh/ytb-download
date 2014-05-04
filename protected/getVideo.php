<?php 
if(isset($_POST['address']) && !empty($_POST['address'])):
    $url = explode('#t',$_POST['address']);
    $url = reset($url);
    $res = exec('./youtubeDown.sh ' . $url);
    $res = urlencode($res);
    echo json_encode(array('success' => true, 'url' => $res));
    exit;
else:
    echo json_encode(array('success' => false));
    exit;
endif;