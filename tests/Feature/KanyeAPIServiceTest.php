<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\KanyeAPIService;

class KanyeAPIServiceTest extends TestCase
{
    private function callable(): KanyeAPIService
    {
        return new KanyeAPIService();
    }

    public function test_kayne_api_service_works()
    {
        $quotes = $this->callable()->getQuotes();
        $this->assertTrue(count($quotes) === KanyeAPIService::QUANTITY);
    }
}
