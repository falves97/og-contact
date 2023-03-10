<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_not_authorized()
    {
        $response = $this->get('api/me');
        $response->assertStatus(401);
    }
}
