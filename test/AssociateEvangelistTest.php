<?php

use  Pyjac\OpenSourceEvangelist\Evangelist\AssociateEvangelist;

class AssociateEvangelistTest extends PHPUnit_Framework_TestCase
{
    /**
     * The instance of AssociateEvangelist used in the test.
     *
     * @var Pyjac\OpenSourceEvangelist\Evangelist\AssociateEvangelist
     */
    protected $associateEvangelist;

    protected function setUp()
    {
        $this->associateEvangelist = new AssociateEvangelist('pyjac', 15);
    }

    public function testGetRank()
    {
        $this->assertSame('Associate Evangelist', $this->associateEvangelist->getRank());
    }

    public function testGetStatus()
    {
        $this->assertSame('Keep Up The Good Work, I crown you Associate Evangelist', $this->associateEvangelist->getStatus());
    }
}
