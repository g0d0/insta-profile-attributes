<?php

define('USERNAME', $argv[1]);
define('ATTRS', explode('.', $argv[2]));

$url = 'https://www.instagram.com/web/search/topsearch/?context=user&query=' . USERNAME;

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, $url);

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = json_decode(curl_exec($ch), true);

// close curl resource to free up system resources
curl_close($ch);

$output = array_reduce(ATTRS, function ($accumulator, $item) use ($output) {
    if (!$accumulator) {
        return $output[$item];
    }

    return $accumulator[$item];
});

if(is_array($output))
{
    echo(json_encode($output));
}

echo $output;