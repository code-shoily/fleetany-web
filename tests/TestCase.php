<?php

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    use DatabaseTransactions;
    
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */

    public function setUp()
    {
        parent::setUp();
        $this->be(User::find(1));
    }
    
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
    
    public function createExecutive()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Nome Usuario Executive',
            'email' => 'executive@alientronics.com.br',
            'password' => 'admin',
            'language' => 'pt-br',
            'contact_id' => 1,
            'company_id' => 1,
        ]);
    
        $user->assignRole('executive');
        return $user;
    }
    
    public function createManager()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Nome Usuario Manager',
            'email' => 'manager@alientronics.com.br',
            'password' => 'admin',
            'language' => 'pt-br',
            'contact_id' => 1,
            'company_id' => 1,
        ]);
        
        $user->assignRole('manager');
        return $user;
    }
    
    public function createOperational()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Nome Usuario Operational',
            'email' => 'operational@alientronics.com.br',
            'password' => 'admin',
            'language' => 'pt-br',
            'contact_id' => 1,
            'company_id' => 1,
        ]);
        
        $user->assignRole('operational');
        return $user;
    }
    
    public function createStaff()
    {
        $user = factory(App\User::class)->create([
            'name' => 'Nome Usuario Staff',
            'email' => 'staff@alientronics.com.br',
            'password' => 'admin',
            'language' => 'pt-br',
            'contact_id' => 1,
            'company_id' => 1,
        ]);
        
        $user->assignRole('staff');
        return $user;
    }
}
