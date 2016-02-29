<?php

require 'vendor/autoload.php';

use Pyjac\OpenSourceEvangelist\OpenSourceEvangelist;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;
use Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException;

try
{
	$openSourceEvangelist = new OpenSourceEvangelist(new OpenSourceEvangelistDataSource(), new OpenSourceEvangelistFactory());
	$evangelist = $openSourceEvangelist->getEvangelist('*t');
	echo $evangelist->getStatus();
} catch(OpenSourceEvangelistNotFoundException $ex){
	echo $ex->getMessage();
}
