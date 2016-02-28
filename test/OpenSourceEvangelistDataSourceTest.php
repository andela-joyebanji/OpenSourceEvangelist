<?php

use \Mockery as m;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;

class OpenSourceEvangelistDataSourceTest extends PHPUnit_Framework_TestCase
{
	/**
     * The instance of OpenSourceEvangelistDataSource used in the test.
     * 
     * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource
     */
    protected $openSourceEvangelistDataSource;
    
    protected function setUp()
    {
    	$evangelistData = new StdClass;
		$evangelistData->public_repos = 25;
		$evangelistData->login = 'pyjac';

        $this->openSourceEvangelistDataSource = 
    					m::mock('Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource');
        $this->openSourceEvangelistDataSource->shouldReceive('getEvangelistData')
        									 ->with('pyjac')->once()->andReturn($evangelistData);
    }

    public function testGetEvangelistData()
    {
    	$evangelistData = new StdClass;
		$evangelistData->public_repos = 25;
		$evangelistData->login = 'pyjac';

        $evangelistData2 = $this->openSourceEvangelistDataSource->getEvangelistData('pyjac');

        $this->assertEquals($evangelistData, $evangelistData2);
    }
	
}

