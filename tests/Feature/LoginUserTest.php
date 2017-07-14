<?php

namespace Tests\Feature;


use Tests\BrowserKitTestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\Auth;

use DB;
use App;

class LoginUserTest extends BrowserKitTestCase
{
	use DatabaseTransactions;

   

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testExample()
    {
      
    }

    public function testPruebaLogin()
    {
        $user = new \App\User();
    	$this->visit(route('login'));
        $this->type('pepito@gmail.com', 'email');
        $this->type('123456', 'password');
        $this->press('iniciar');
        $this->assertTrue(Auth::check());
        $this->seePageIs(route('home'));
    } 

   
}

        