<?php

namespace Pyjac\OpenSourceEvangelist\Evangelist;

class AssociateEvangelist extends EvangelistAbstract
{
	
	/**
	 * Create a new associate envangelist instance.
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
		return "Associate Evangelist";
	}

	/**
     * Get the status of the evangelist.
     *
     * @return string
     */
	function getStatus()
	{
		return "Keep Up The Good Work, I crown you Associate Evangelist";
	}
}