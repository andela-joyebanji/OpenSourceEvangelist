<?php

namespace Pyjac\OpenSourceEvangelist;

use GuzzleHttp;
use GuzzleHttp\Exception\ClientException;
use Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException;

class OpenSourceEvangelistDataSource implements OpenSourceEvangelistDataSourceInterface
{
    /**
     * Get data of the provided username from the data source.
     *     
     * @param  string $username 
     * @throws Pyjac\OpenSourceEvangelist\Exception\OpenSourceEvangelistNotFoundException
     * 
     * @return \stdClass          
     */
    public function getEvangelistData($username)
    {
        try {
            $client = new GuzzleHttp\Client();

            $res = $client->request('GET', getenv('GITHUB_API_URL').$username, [
                'query' => [
                            'client_id'     => getenv('CLIENT_ID'),
                            'client_secret' => getenv('CLIENT_SECRET'),
                            ],
            ]);

            return json_decode($res->getBody());
        } catch (ClientException $e) {
            throw new OpenSourceEvangelistNotFoundException();
        }
    }
}
