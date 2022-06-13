<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MainFunctionsTest extends TestCase
{
    public function testPreRegisterUser()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->json('get', '/api/pre-register-user');
        
        // $apiResponse = $response->baseResponse->getData();
        
        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'data',
                ]);
    }

    public function testGetAllProposals2()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->json('get', '/api/shared/all-proposals-2');

        // $apiResponse = $response->baseResponse->getData();

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'proposals',
                ]);
    }
    
    public function testGetAllProposals2Changes()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->json('get', '/api/shared/all-proposals-2/changes');

        // $apiResponse = $response->baseResponse->getData();

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'success',
                    'message',
                ]);
    }
}