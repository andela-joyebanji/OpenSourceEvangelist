<?php

namespace Pyjac\OpenSourceEvangelist;

use Pyjac\OpenSourceEvangelist\Evangelist\AssociateEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\NoneEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist;

class OpenSourceEvangelistFactory implements OpenSourceEvangelistFactoryInterface
{
    /**
     * Factory method to create an instance of an evangelist.
     *
     * @param string $username
     * @param int    $repos
     *
     * @return Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract
     */
    public function createEvangelist($username, $repos)
    {
        $this->validateUserInput($username, $repos);
        if ($repos >= 5 && $repos <= 10) {
            return new JuniorEvangelist($username, $repos);
        }
        if ($repos >= 11 && $repos <= 20) {
            return new  AssociateEvangelist($username, $repos);
        }
        if ($repos >= 21) {
            return new SeniorEvangelist($username, $repos);
        }

        return new NoneEvangelist($username, $repos);
    }

    /**
     * Validate inputs are of the expected type.
     *
     * @param string $username [description]
     * @param int    $repos    [description]
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    private function validateUserInput($username, $repos)
    {
        if (!is_string($username) || !is_int($repos)) {
            throw new \InvalidArgumentException('Username must be type of string and number of repository of type integer.');
        }
    }
}
