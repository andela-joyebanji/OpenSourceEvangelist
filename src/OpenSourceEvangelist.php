<?php

namespace Pyjac\OpenSourceEvangelist;

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
}
