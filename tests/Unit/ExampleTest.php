<?php

namespace Tests\Unit;

use App\Http\Controllers\RegFormController;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function testRegistration()
    {
        
        $request = new Request([
            'last_name' => 'Doe',
            'first_name' => 'John',
            'patronymic' => 'Alex',
            'company' => 'Test Company',
            'department' => 'Test Department',
        ]);
        
        $controller = new RegFormController();
  
        $response = $controller->registration($request);

        $response->assertRedirect(route('index'));

        $this->assertDatabaseHas('employees', [
            'lastname' => 'Doe',
            'firstname' => 'John',
            'patronymic' => 'Alex',
            'company' => 'Test Company',
            'department' => 'Test Department',
        ]);
    }

    public function testRegistrationWithInvalidData()
    {
        $request = new Request([
            'last_name' => '',
            'first_name' => '',
            'patronymic' => '',
            'company' => '',
            'department' => '',
        ]);
        
        $controller = new RegFormController();

        $response = $controller->registration($request);

        $response->assertRedirect();
        $response->assertSessionHasErrors([
            'last_name',
            'first_name',
            'patronymic',
            'company',
            'department',
        ]);

        $this->assertDatabaseMissing('employees', [
            'lastname' => '',
            'firstname' => '',
            'patronymic' => '',
            'company' => '',
            'department' => '',
        ]);
    }
}
