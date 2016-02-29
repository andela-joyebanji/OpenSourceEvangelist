<?php

require 'vendor/autoload.php';

use Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelist;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;

try {
    $openSourceEvangelist = new OpenSourceEvangelist(new OpenSourceEvangelistDataSource(), new OpenSourceEvangelistFactory());
    $evangelist = $openSourceEvangelist->getEvangelist('*t');
    echo $evangelist->getStatus();
} catch (OpenSourceEvangelistNotFoundException $ex) {
    echo $ex->getMessage();
}
