<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ValidateEmailTest extends TestCase
{
    public function test_validate_subject()
    {
        $response = $this->post('/api/send', ['subject' => 'Comercial']);

        $response->assertJson(fn (AssertableJson $json) => $json->hasAll(['message', 'errors'])
            ->hasAny('subject', 'name', 'company', 'email', 'phone', 'message'));
    }
}
