<?php

namespace App\Tests\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use App\Models\CustomerModel;

class CustomerModelTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $customerModel;

    protected function setUp(): void
    {
        parent::setUp();
        $this->customerModel = new CustomerModel();
    }

    public function testCreateCustomer()
    {
        $data = [
            'name'    => 'John Doe',
            'email'   => 'john@example.com',
            'phone'   => '1234567890',
            'address' => '123 Main St'
        ];

        $this->customerModel->insert($data);
        $this->seeInDatabase('customers', ['email' => 'john@example.com']);
    }
}
