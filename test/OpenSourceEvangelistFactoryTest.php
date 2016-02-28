<?php

use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory;
use Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract;
use Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist;

class OpenSourceEvangelistFactoryTest extends PHPUnit_Framework_TestCase
{
	
    protected function setUp()
    {
        $this->openSourceEvangelistFactory = new OpenSourceEvangelistFactory();
    }
	

    public function testCreateEvangelistReturnsAnEvangelist()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 10);
        $this->assertInstanceOf(EvangelistAbstract::class, $evangelist);
    }

    public function testCreateEvangelistReturnsCorrectEvangelist()
    {
        $evangelist = $this->openSourceEvangelistFactory->createEvangelist('pyjac', 10);
        $this->assertInstanceOf(JuniorEvangelist::class, $evangelist);
    }

}