<?php

use \Mockery as m;
use Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract;
use Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelist;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource;
use  Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;

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
        $evangelistData = new StdClass();
        $evangelistData->public_repos = 25;
        $evangelistData->login = 'pyjac';

        $seniorEvangelist = new SeniorEvangelist($evangelistData->login, $evangelistData->public_repos);

        $this->openSourceEvangelistDataSource =
                        m::mock('Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSourceInterface');
        $this->openSourceEvangelistDataSource->shouldReceive('getEvangelistData')
                                             ->with('pyjac')->once()->andReturn($evangelistData);

        $this->openSourceEvangelistFactory = m::mock('Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactoryInterface');
        $this->openSourceEvangelistFactory->shouldReceive('createEvangelist')->with($evangelistData->login, $evangelistData->public_repos)
        ->once()->andReturn($seniorEvangelist);
    }

    public function testGetEvangelistReturnsAnInstanceOfEvangelistAbstract()
    {
        $openSourceEvangelist = new OpenSourceEvangelist(
                $this->openSourceEvangelistDataSource,
                $this->openSourceEvangelistFactory
            );

        $this->assertTrue($openSourceEvangelist->getEvangelist('pyjac') instanceof EvangelistAbstract);
    }

    public function testGetEvangelistReturnsCorrectEvangelist()
    {
        $openSourceEvangelist = new OpenSourceEvangelist(
                $this->openSourceEvangelistDataSource,
                $this->openSourceEvangelistFactory
            );

        $this->assertTrue($openSourceEvangelist->getEvangelist('pyjac') instanceof SeniorEvangelist);
    }

    public function tearDown()
    {
        m::close();
    }
}
