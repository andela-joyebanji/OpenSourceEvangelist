<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

class JuniorEvangelist extends EvangelistAbstract
{
    /**
     * Create a new junior envangelist instance.
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
        return 'Junior Evangelist';
    }

    /**
     * Get the status of the evangelist.
     *
     * @return string
     */
    public function getStatus()
    {
        return 'Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist';
    }
}
