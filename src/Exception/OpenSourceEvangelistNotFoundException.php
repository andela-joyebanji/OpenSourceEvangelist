<?php

namespace Pyjac\OpenSourceEvangelist\Exception;

class OpenSourceEvangelistNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct('The specified evangelist name was not found. Please check the name.');
    }
}
