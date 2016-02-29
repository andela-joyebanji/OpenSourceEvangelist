<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

abstract class EvangelistAbstract
{
    /**
     * Stores the username of the evangelist.
     *
     * @var string
     */
    private $username;

    /**
     * Stores the number of public repositories the evangelist have.
     *
     * @var int
     */
    private $numberOfRepos;

    /**
     * Set the username and number of Repositories for the inheriting class.
     *
     * @param string $username
     * @param int    $numberOfRepos
     */
    public function __construct($username, $numberOfRepos)
    {
        $this->username = $username;
        $this->numberOfRepos = $numberOfRepos;
    }

    /**
     * Get the username of the evangelist.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the rank of the evangelist.
     *
     * @return int
     */
    public function getNumberOfRepos()
    {
        return $this->numberOfRepos;
    }

    /**
     * Get the rank of the evangelist.
     *
     * @return string
     */
    abstract public function getRank();

    /**
     * Get the status of the evangelist.
     *
     * @return string
     */
    abstract public function getStatus();
}
