<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_submit()
    {

        $response = $this->post('/submit', [
            'title'=>'Mr',
            'url'=>'http://example.com',
            'description' => 'Example description.',
        ]);


        $response->assertStatus(200);
    }
}
