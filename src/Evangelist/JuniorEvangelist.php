<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

class JuniorEvangelist extends EvangelistInterface
{
	/**
	 * Create a new junior envangelist instance.
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
		return "Junior Evangelist";
	}

	/**
     * Get the status of the evangelist.
     *
     * @return string
     */
	function getStatus()
	{
		return "Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist";
	}
}