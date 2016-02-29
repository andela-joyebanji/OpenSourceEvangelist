<?php

namespace Pyjac\OpenSourceEvangelist;

use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSourceInterface;
use Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactoryInterface;

class OpenSourceEvangelist
{
    /**
      * Stores reference to the Open Source Evangelist Factory.
      *
      * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactoryInterface
      */
     private $openSourceEvangelistFactory;

     /**
      * Stores a Reference to the Open Source Evangelist Data Source.
      *
      * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSourceInterface
      */
     private $openSourceEvangelistDataSource;

     /**
      * Create a new Open Source Evangelist instance.
      *
      * @param Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSourceInterface $openSourceEvangelistDataSource
      * @param Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactoryInterface    $openSourceEvangelistFactory
      */
     public function __construct(OpenSourceEvangelistDataSourceInterface $openSourceEvangelistDataSource, OpenSourceEvangelistFactoryInterface $openSourceEvangelistFactory)
     {
         $this->openSourceEvangelistDataSource = $openSourceEvangelistDataSource;
         $this->openSourceEvangelistFactory = $openSourceEvangelistFactory;
         $this->loadEnv();
     }

     /**
      * Get a open source evangelist instance.
      *
      * @param string $username
      * @throws InvalidArgumentException
      * @return  Pyjac\OpenSourceEvangelist\Evangelist\EvangelistAbstract
      */
     public function getEvangelist($username)
     {
         $evangelistData = $this->openSourceEvangelistDataSource->getEvangelistData($username);

         return $this->openSourceEvangelistFactory->createEvangelist($evangelistData->login, $evangelistData->public_repos);
     }

    protected function loadEnv()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/../../../');
        $dotenv->load();
        $dotenv->required(["GITHUB_API_URL", "CLIENT_ID", "CLIENT_SECRET"]);
    }
}
