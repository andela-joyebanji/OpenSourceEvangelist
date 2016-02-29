<?php

namespace Pyjac\OpenSourceEvangelist;

use GuzzleHttp;

class OpenSourceEvangelistDataSource implements OpenSourceEvangelistDataSourceInterface
{
	public function getEvangelistData($username)
	{
		try {
			$client = new GuzzleHttp\Client();
			
			$res = $client->request('GET', getenv('GITHUB_API_URL').$username , [
				'query' => [
							'client_id'     => getenv('CLIENT_ID'),
							'client_secret' => getenv('CLIENT_SECRET')
							]
			]);

			return json_decode($res->getBody());

		} catch (ClientException $e) {
			//throw new Exception("Error Processing Request", 1);
			exit("None Implementation Error");
		    //if ($e->hasResponse()) {
		      //  echo $e->getResponse()->getReasonPhrase();
		    //}
		}
	}
}