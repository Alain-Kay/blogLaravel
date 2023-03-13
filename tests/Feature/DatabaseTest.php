<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;
   //Test validation correctes des informations
   public function testValidationRegistration()
   {

    $count = User::count();

      $response = $this->post('/register', [
           'email' => "kazadikayumba@gmail.com",
           'name' => 'test',
           'password' => 'password',
           'password_confirmation' => 'password'
       ]);

       $newCount = User::count();
       
       
       $this->assertNotEquals($count, $newCount);
   }

   public function testInvalidRegistration()
   {
       $response = $this->post('/register', [
           'email' => '',
           'name' => 'test',
           'password' => 'password',
           'password_confirmation' => 'password'
       ]);

       $response->assertSessionHasErrors();
   }
}
