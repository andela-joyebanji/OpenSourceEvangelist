<?php

namespace Pyjac\OpenSourceEvangelist;

use GuzzleHttp;

class OpenSourceEvangelistDataSource implements OpenSourceEvangelistDataSourceInterface
{
	public function getEvangelistData($username)
	{
		try {
			$client = new GuzzleHttp\Client();
			$res = $client->request('GET', 'https://api.github.com/users/'.$username , [
				'query' => [
							'client_id'     => '57a48d97bd6f0936370f',
							'client_secret' => 'c2ffc3055c5f0ff95cc572431861ec0c7d29c646'
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