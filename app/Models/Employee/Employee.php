<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable= ['first_name', 'last_name', 'middle_name', 'address', 'department_id', 'country_id', 'state_id', 'city_id', 'zip_code', 'birth_date', 'hired_date'];
}
