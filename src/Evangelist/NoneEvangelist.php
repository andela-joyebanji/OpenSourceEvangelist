<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

class NoneEvangelist extends EvangelistAbstract
{
    /**
     * Create a new none envangelist instance.
     *
     * @param string $username
     * @param string $numberOfRepos
     */
    public function __construct($username, $numberOfRepos)
    {
        parent::__construct($username, $numberOfRepos);
    }

    /**
     * Get the rank of the evangelist.
     *
     * @return string
     */
    public function getRank()
    {
        return 'None Evangelist';
    }

    /**
     * Get the status of the evangelist.
     *
     * @return string
     */
    public function getStatus()
    {
        return 'You need to be open to the world with your knowledge man!!!.';
    }
}
