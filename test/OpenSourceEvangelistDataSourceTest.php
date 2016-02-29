<?php

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
        $this->loadEnv();
        $this->openSourceEvangelistDataSource = new OpenSourceEvangelistDataSource();
    }

    public function testGetEvangelistData()
    {
        $evangelistData = $this->openSourceEvangelistDataSource->getEvangelistData('andela-anandaa');

        $this->assertObjectHasAttribute('login', $evangelistData);
        $this->assertObjectHasAttribute('public_repos', $evangelistData);
    }

    /**
     * @expectedException Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException
     */
    public function testGetEvangelistDataThrowsOpenSourceEvangelistNotFoundExceptionWhenNonExitentUsernameIsPassed()
    {
        $this->openSourceEvangelistDataSource->getEvangelistData('$andela%@');
    }

    protected function loadEnv()
    {
        if (!getenv('TRAVIS_BUILD')) {
            $dotenv = new \Dotenv\Dotenv(__DIR__.'/../../../');
            $dotenv->load();
            $dotenv->required(['GITHUB_API_URL', 'CLIENT_ID', 'CLIENT_SECRET']);
        }
    }
}
