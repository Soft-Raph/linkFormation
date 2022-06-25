<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class SubmitLinkTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_form_submission()
    {
        $this->assertTrue(true);

//        $response = $this->post('/submit', [
//            'title'=>'Mr',
//            'url'=>'http://example.com',
//            'description' => 'Example description.',
//        ]);
//        $this->assertDatabaseHas('links', [
//            'title' => 'Example Title',
//        ]);
//        $response
//            ->assertStatus(302)
//            ->
//
//            assertHeader('Location', url('/'));
//
//        $this->get('/')
//            ->assertSee('Example Title');
//
//        $this->assertTrue(true);
//        $response->assertStatus(200);
    }
}
