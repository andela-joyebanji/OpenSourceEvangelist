<?php

use  Pyjac\OpenSourceEvangelist\Evangelist\NoneEvangelist;

class NoneEvangelistTest extends PHPUnit_Framework_TestCase
{
    /**
     * The instance of NoneEvangelist used in the test.
     *
     * @var Pyjac\OpenSourceEvangelist\Evangelist\NoneEvangelist
     */
    protected $noneEvangelist;

    protected function setUp()
    {
        $this->noneEvangelist = new NoneEvangelist('pyjac', 1);
    }

    public function testGetRank()
    {
        $this->assertSame('None Evangelist', $this->noneEvangelist->getRank());
    }

    public function testGetStatus()
    {
        $this->assertSame('You need to be open to the world with your knowledge man!!!.', $this->noneEvangelist->getStatus());
    }
}
