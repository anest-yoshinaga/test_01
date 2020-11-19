<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{

    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get(route('show'));

        $response->assertStatus(200)
            ->assertViewIs('articles.index');
    }
}
