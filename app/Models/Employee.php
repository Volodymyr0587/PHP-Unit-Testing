<?php 

namespace App\Models;

class Employee 
{
    protected $employee;
    protected $employeeAge;

    public function setName($name)
    {
        $this->employee = $name;
    }

    public function getName()
    {
        return $this->employee;
    }

    public function setAge($age)
    {
        $this->employeeAge = $age;
    }

    public function getAge()
    {
        return $this->employeeAge;
    }

    public function setNameAndAge($name, $age): void 
    {
        $this->employee = $name;
        $this->employeeAge = $age;
    }

    public function getNameAndAge()
    {
        return [$this->employee, $this->employeeAge];
    }
}