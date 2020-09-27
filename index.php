<?php

define('USERNAME', $argv[1]);
define('ATTRS', explode('.', $argv[2]));

$url = 'https://www.instagram.com/web/search/topsearch/?context=user&query=' . USERNAME;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = json_decode(curl_exec($ch), true);

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