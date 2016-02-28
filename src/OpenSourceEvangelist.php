<?php

namespace Pyjac\OpenSourceEvangelist;

use GuzzleHttp;

class OpenSourceEvangelist 
{
     
     /**
      * Stores reference to the Open Source Evangelist Factory.
      * 
      * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistFactory
      */
     private $openSourceEvangelistFactory;
     
     /**
      * Stores a Reference to the Open Source Evangelist Data Source.
      * 
      * @var Pyjac\OpenSourceEvangelist\OpenSourceEvangelistDataSource
      */
     private $openSourceEvangelistDataSource;

     /**
      * Create a new Open Source Evangelist instance.
      *           
      * @param OpenSourceEvangelistDataSourceInterface $openSourceEvangelistDataSource       
      * @param OpenSourceEvangelistFactoryInterface    $openSourceEvangelistFactoryInterface 
      */
     public function __construct(OpenSourceEvangelistDataSourceInterface $openSourceEvangelistDataSource, OpenSourceEvangelistFactoryInterface $openSourceEvangelistFactory)
     {
          $this->openSourceEvangelistDataSource = $openSourceEvangelistDataSource;
          $this->openSourceEvangelistFactory = $openSourceEvangelistFactory;    
     }

     /**
     * Create a open source evangelist instance.
     *
     * @param string $username
     * @param IOpenSourceEvangelistFactory $openSourceEvangelistFactory
     * @throws InvalidArgumentException
     */
     public function getEvangelist($username)
     {
        $evangelistData = $this->openSourceEvangelistDataSource->getEvangelistData($username);

        return $this->openSourceEvangelistFactory->createEvangelist($evangelistData->login, $evangelistData->public_repos);
     }
}
