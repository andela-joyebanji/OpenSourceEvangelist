<?php

use \Mockery as m;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;

class OpenSourceEvangelistTest extends PHPUnit_Framework_TestCase
{
	/**
	 * The data source used in the test.
	 * 
	 * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
	 */
	protected $openSourceEvangelistDataSource;

	/**
	 * The factory for evangelists instance used in the test.
	 * 
	 * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;
	 */
	protected $openSourceEvangelistFactory;

    protected function setUp()
    {
    	$evangelistData = new StdClass;
		$evangelistData->public_repos = 25;
		$evangelistData->login = 'pyjac';

    	$this->openSourceEvangelistDataSource = m::mock('Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSourceInterface');
        $this->openSourceEvangelistDataSource->shouldReceive('getEvangelistData')->once()->andReturn($evangelistData);

        //$this->openSourceEvangelistDataSource  = new OpenSourceEvangelistDataSource();
        $this->openSourceEvangelistFactory  = new OpenSourceEvangelistFactory();
    }
	

    public function testOpenSourceEvangelistGetEvangelist()
    {
    	

        $openSourceEvangelist = new OpenSourceEvangelist(
        		$this->openSourceEvangelistDataSource,
        		$this->openSourceEvangelistFactory
        	);

        $this->assertTrue($openSourceEvangelist->getEvangelist('pyjac') instanceof EvangelistAbstract);
    }

    public function tearDown()
    {
        m::close();
    }


}