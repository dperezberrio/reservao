<?php

namespace Tests\Feature;

use Tests\TestCase;
use database\factories as ModelFactory;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
	if ($this->assertDatabaseHas('users' , ['email' => 'dperezberrio@gmail.com'])
	&& ['password' =>  '$2y$10$./Y28ta9mDXEYIiZYYzDTeVz0aw06hrCKoGuexjFX3CFginIBH8ua']);
    }
}
