<?php

namespace Pyjac\OpenSourceEvangelist;

interface OpenSourceEvangelistDataSourceInterface
{
    /**
     * Get data of the provided username from the data source.
     *
     * @param string $username
     *
     * @throws Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException
     *
     * @return \stdClass
     */
    public function getEvangelistData($username);
}
