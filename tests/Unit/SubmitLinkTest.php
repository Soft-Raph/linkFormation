<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SubmitLinkTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_form_submission()
    {
        $response = $this->post('/submit',[
            'title'=>'Mr',
            'url'=>'http://example.com',
            'description' => 'Example description.',
        ]);
        $this->assertDatabaseHas('links', [
            'title' => 'Example Title'
        ]);

        $this->assertTrue(true);
    }
}
