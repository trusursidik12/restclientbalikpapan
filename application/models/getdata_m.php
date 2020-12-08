<?php

use GuzzleHttp\Client;

class Getdata_m extends CI_model
{
	
	private $_client;

	public function __construct()
	{
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://ispumaps.id/restserverclientdata/'
		]);
	}

	public function get_data1()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/show/indoor/data', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'id_stasiun' => 'PELINDO2_01'
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

	public function get_data2()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/show/indoor/data', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'id_stasiun' => 'PELINDO2_02'
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

	public function get_ispu1()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/show/indoor/ispu', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'id_stasiun' => 'PELINDO2_01'
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

	public function get_ispu2()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/show/indoor/ispu', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'id_stasiun' => 'PELINDO2_02'
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
