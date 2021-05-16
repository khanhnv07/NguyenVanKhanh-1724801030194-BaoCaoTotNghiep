<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'salary' => $this->faker->numberBetween(30000,50000),
            'address' => $this->faker->address,
            'age'     => $this->faker->numberBetween(20,45),
            'idcard'   => $this->faker->numberBetween(10000,90000),
            'status'  => $this->faker->numberBetween(0,1),
            'department' => $this->faker->randomElement(array('Accounting','Marketing','Quality'))
        ];
    }
}
