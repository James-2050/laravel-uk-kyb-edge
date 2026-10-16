<?php

namespace JamesForsyth\UKBusiness;

use GuzzleHttp\Client;

class UKBusinessClient
{
    protected Client $client;
    protected string $baseUrl;

    public function __construct(?string $baseUrl = null)
    {
        $this->baseUrl = $baseUrl ?? 'https://uk-business-sanitizer.jamesforsyth1829.workers.dev';
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => 10.0,
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * Lookup and sanitize company data by company number.
     */
    public function lookup(string $companyNumber): array
    {
        $response = $this->client->get('/lookup', [
            'query' => ['company_number' => $companyNumber]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Search for a company and return sanitized top result.
     */
    public function sanitize(string $query): array
    {
        $response = $this->client->get('/sanitize', [
            'query' => ['q' => $query]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Fetch pre-formatted director KYB officers data.
     */
    public function officers(string $companyNumber): array
    {
        $response = $this->client->get('/officers', [
            'query' => ['company_number' => $companyNumber]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Extract balance sheet financials from filing PDF via Vision Model.
     */
    public function financials(string $documentId): array
    {
        $response = $this->client->get('/financials', [
            'query' => ['document_id' => $documentId]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Proxy stream filing PDF document.
     */
    public function document(string $documentId): string
    {
        $response = $this->client->get('/document', [
            'query' => ['document_id' => $documentId]
        ]);

        return $response->getBody()->getContents();
    }
}
