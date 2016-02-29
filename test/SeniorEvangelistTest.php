<?php

use  Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist;

class SeniorEvangelistTest extends PHPUnit_Framework_TestCase
{
	/**
	 * The instance of SeniorEvangelist used in the test.
	 * 
	 * @var Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist
	 */
	protected $seniorEvangelist;

	protected function setUp()
    {

        $this->seniorEvangelist = new SeniorEvangelist('pyjac', 30);
    }

    public function testGetRank()
    {
    	$this->assertSame("Senior Evangelist", $this->seniorEvangelist->getRank());
    }

    public function testGetStatus()
    {
    	$this->assertSame("Yeah, I crown you Senior Evangelist. Thanks for making the world a better place", $this->seniorEvangelist->getStatus());
    }
}