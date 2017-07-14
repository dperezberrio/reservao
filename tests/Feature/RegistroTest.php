<?php

namespace Tests\Feature;



use Tests\BrowserKitTestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\Auth;

use DB;
use App;

class RegistroTest extends BrowserKitTestCase
{
	use DatabaseTransactions;

   

    /**
     * A basic test example.
     * @test
     * @return void
     */
   

   public function testRegistro()
    {
        $this->visit('register');               
        $this->type('danny', 'name');
        $this->type('1', 'rol');
        $this->type('danny@hotmail.com', 'email');
        $this->type('123456', 'password');
        $this->type('123456', 'password_confirmation');
        $this->press('registrar');
        $this->seeInDatabase('users', ['email' => 'danny@hotmail.com']);
        $this->seePageIs(route('home'));
    }

   
}
