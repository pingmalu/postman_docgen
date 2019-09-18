<?php
include_once('config.php');
echo '<pre>';
foreach ($config['lists'] as $key => $value) {
    $res_api = file_get_contents('https://api.getpostman.com/collections/' . $value . '?apikey=' . $config['tk']);
    $res_api_json = json_decode($res_api, true);
    $write_text = json_encode($res_api_json['collection']);
    $myfile = fopen($value.'.json', "w") or die("Unable to open file!");
    fwrite($myfile, $write_text);
    fclose($myfile);
    $build = '.'.DIRECTORY_SEPARATOR.'docgen build -i '.$value.'.json -o '.$value.'.html';
    system($build);
    echo $key." ok\n";
}
echo '</pre>';
