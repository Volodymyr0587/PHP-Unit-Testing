<?php

use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    protected $employee;

    public function setUp(): void 
    {
        $this->employee = new \App\Models\Employee;
    }

    public function testGetEmployeeName(): void 
    {
        $this->employee->setName('Roger');

        $this->assertEquals($this->employee->getName(), 'Roger');
    }  
    
    public function testGetEmployeeAge(): void 
    {
        $this->employee->setAge(35); 

        $this->assertEquals($this->employee->getAge(), 35);
    }

    public function testGetEmployeeNameAndAge(): void 
    {
        $this->employee->setNameAndAge('Roger', 35); 

        $this->assertEquals($this->employee->getNameAndAge(), ['Roger', 35]);

        $this->assertArrayHasKey(1, $this->employee->getNameAndAge());
    }
}