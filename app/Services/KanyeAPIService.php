<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class KanyeAPIService
{
    public CONST URL = 'https://api.kanye.rest/'; // The External API
    public const QUANTITY = 6; // 5 Quotes
    public const CACHE_KEY = 'kanye_quotes';
    public const CACHE_DURATION = 60; // 1 Minute

    public function getQuotes(): array
    {
        return Cache::remember($this::CACHE_KEY, $this::CACHE_DURATION, function() {
            return $this->fetchQuotes();
        });
    }

    public function fetchQuotes(): array
    {
        $quotes = collect();
        for ($i = 0; $i < $this::QUANTITY; $i++) {
            $quote = $this->getQuote();
            if($quotes->doesntContain($quote)) {
                $quotes->push($quote);
            } else {
                $i--; // Try Again
            }
        }
        return $quotes->toArray();
    }


    private function getQuote() {
        return Http::get($this::URL)->json()['quote'] ?? '';
    }
}
