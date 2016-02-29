<?php


require 'vendor/autoload.php';
use GuzzleHttp\Exception\RequestException;

$client = new GuzzleHttp\Client();

try {
    $res = $client->request('GET', 'https://api.github.com/users/p1yjac', [
        'query' => [
                    'client_id'     => '57a48d97bd6f0936370f',
                    'client_secret' => 'c2ffc3055c5f0ff95cc572431861ec0c7d29c646',
                    ],
    ]);

    echo $res->getStatusCode();
    // "200"
    // 'application/json; charset=utf8'
    $repos = json_decode($res->getBody())->public_repos;

    if ($repos < 5) {
        echo 'Damn It!!!';
    }

    if ($repos >= 5 && $repos <= 10) {
        echo 'Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist';
    }
    if ($repos >= 11 && $repos <= 20) {
        echo 'Keep Up The Good Work, I crown you Associate Evangelist';
    }
    if ($repos >= 21) {
        echo 'Yeah, I crown you Senior Evangelist. Thanks for making the world a better place';
    }
} catch (RequestException $e) {
    //var_dump($e->getRequest());
    if ($e->hasResponse()) {
        echo $e->getResponse()->getReasonPhrase();
    }
}
