<?php

use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;
use Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract;
use Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\AssociateEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\SeniorEvangelist;
use Pyjac\OpenSourceEvangelist\Evangelist\NoneEvangelist;

class OpenSourceEvangelistFactoryTest extends PHPUnit_Framework_TestCase
{
	/**
     * The instance of OpenSourceEvangelistFactory used in the test.
     * 
     * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory
     */
    protected $openSourceEvangelistFactory;
    
    protected function setUp()
    {
        $this->openSourceEvangelistFactory = new OpenSourceEvangelistFactory();
    }
	

    public function testCreateEvangelistReturnsAnEvangelist()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 10);
        $this->assertInstanceOf(EvangelistAbstract::class, $evangelist);
    }

    public function testCreateEvangelistToReturnJuniorEvangelistWhenNumberOfReposGreaterThan4ButLessThan11IsPassed()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 10);
        $this->assertInstanceOf(JuniorEvangelist::class, $evangelist);

        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 5);
        $this->assertInstanceOf(JuniorEvangelist::class, $evangelist);
    }

    public function testCreateEvangelistToReturnAssociateEvangelistWhenNumberOfReposGreaterThan10ButLessThan21IsPassed()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 11);
        $this->assertInstanceOf(AssociateEvangelist::class, $evangelist);

        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 20);
        $this->assertInstanceOf(AssociateEvangelist::class, $evangelist);
    }

    public function testCreateEvangelistToReturnSeniorEvangelistWhenNumberOfReposGreaterThan20IsPassed()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 21);
        $this->assertInstanceOf(SeniorEvangelist::class, $evangelist);

        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 100);
        $this->assertInstanceOf(SeniorEvangelist::class, $evangelist);
    }

    public function testCreateEvangelistToReturnNoneEvangelistWhenNumberOfReposLessThan5IsPassed()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 4);
        $this->assertInstanceOf(NoneEvangelist::class, $evangelist);

        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 0);
        $this->assertInstanceOf(NoneEvangelist::class, $evangelist);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCreateEvangelistThrowsInvalidArgumentExceptionWhenNonStringValueIsPassedForUsername()
    {
        $this->openSourceEvangelistFactory->createEvangelist(4, 4);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCreateEvangelistThrowsInvalidArgumentExceptionWhenNonIntegerValueIsPassedForRepos()
    {
        $this->openSourceEvangelistFactory->createEvangelist(4, "pyjac");
    }

}