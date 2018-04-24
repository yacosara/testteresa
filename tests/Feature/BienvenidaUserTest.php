<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BienvenidaUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomeConApodo()
    {
        $response = $this->get('/bienvenido/david/davico');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido David y tu apodo es Davico');
    }
    public function testWelcomeSinApodo ()
    {
        $response = $this->get('/bienvenido/Dadddvid');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido Dadddvid.');
    }
}
