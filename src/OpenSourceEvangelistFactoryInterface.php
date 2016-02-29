<?php

namespace Pyjac\OpenSourceEvangelist;

interface OpenSourceEvangelistFactoryInterface
{
	/**
     * Factory method to create an instance of an evangelist.
     *
     * @param string $username
     * @param int    $repos
     *
     * @return Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract
     */
    public function createEvangelist($username, $repos);
}
