<?php

namespace Pyjac\OpenSourceEvangelist;

interface OpenSourceEvangelistFactoryInterface
{
    public function createEvangelist($username, $repos);
}
