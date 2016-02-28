<?php

namespace Pyjac\OpenSourceEvangelist;

interface OpenSourceEvangelistFactoryInterface
{
	function createEvangelist($username, $repos);
}