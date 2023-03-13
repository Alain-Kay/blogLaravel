<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTest extends TestCase
{
    use RefreshDatabase;

    //Test validation correctes des informations
    public function testValidationRegistration()
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();

       $response = $this->post('/register', [
            'email' => $email,
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
