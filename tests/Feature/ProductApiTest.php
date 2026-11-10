<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_api_returns_successful_response()
    {
        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
        
        $response->assertJsonStructure([
            'data'
        ]);
    }
}