<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

class SeniorEvangelist extends EvangelistAbstract
{
	/**
	 * Create a new senior envangelist instance.
	 * 		
	 * @param string $username      
	 * @param string $numberOfRepos
	 */
	function __construct($username, $numberOfRepos)
	{	
		parent::__construct($username, $numberOfRepos);
	}

	/**
     * Get the rank of the evangelist.
     *
     * @return string
     */
	function getRank()
	{
		return "Senior Evangelist";
	}

	/**
     * Get the status of the evangelist.
     *
     * @return string
     */
	function getStatus()
	{
		return "Yeah, I crown you Senior Evangelist. Thanks for making the world a better place";
	}
}