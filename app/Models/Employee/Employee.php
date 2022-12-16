<?php

namespace App\Models\Employee;

use App\Models\Location\Country;
use App\Models\Department\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable= ['first_name', 'last_name', 'middle_name', 'address', 'department_id', 'country_id', 'state_id', 'city_id', 'zip_code', 'birth_date', 'hired_date'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }
}
