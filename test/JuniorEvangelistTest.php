<?php

use  Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist;

class JuniorEvangelistTest extends PHPUnit_Framework_TestCase
{
    /**
     * The instance of JuniorEvangelist used in the test.
     *
     * @var Pyjac\OpenSourceEvangelist\Evangelist\JuniorEvangelist
     */
    protected $JuniorEvangelist;

    protected function setUp()
    {
        $this->juniorEvangelist = new JuniorEvangelist('pyjac', 6);
    }

    public function testGetRank()
    {
        $this->assertSame('Junior Evangelist', $this->juniorEvangelist->getRank());
    }

    public function testGetStatus()
    {
        $this->assertSame('Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist', $this->juniorEvangelist->getStatus());
    }
}
