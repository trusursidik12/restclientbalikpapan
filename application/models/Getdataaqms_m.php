<?php

use GuzzleHttp\Client;

class Getdataaqms_m extends CI_model
{
	
	private $_client;

	public function __construct()
	{
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://localhost/restserverclientbalikpapan/'
		]);
	}

	public function getbalikpapanbbdata()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/get/aqmsdata/bb', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}

	public function getbalikpapanbbispu()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/get/aqmsispu/bb', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}

	public function getbalikpapanpbdata()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/get/aqmsdata/pb', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}

	public function getbalikpapanpbispu()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/get/aqmsispu/pb', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}
}