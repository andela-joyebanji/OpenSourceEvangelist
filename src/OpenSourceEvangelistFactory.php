<?php 

namespace Pyjac\OpenSourceEvangelist;

use Pyjac\OpenSourceEvangelist\Evangelist\AssociateEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\NoneEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist;

class OpenSourceEvangelistFactory implements OpenSourceEvangelistFactoryInterface
{

	public function createEvangelist($username, $repos)
	{
		if($repos >= 5 && $repos <= 10){

			return new JuniorEvangelist($username, $repos);
		}
		if($repos >= 11 && $repos <= 20){

			return new  AssociateEvangelist($username, $repos);
		}
		if($repos >= 21){

			return new SeniorEvangelist($username, $repos);
		}

		return new NoneEvangelist($username, $repos);
	}
	
}