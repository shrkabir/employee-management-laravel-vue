<?php

namespace App\Http\Controllers\Backend\API;

use Illuminate\Http\Request;
use App\Models\Location\State;
use App\Models\Location\Country;
use App\Http\Controllers\Controller;
use App\Models\Department\Department;

class EmployeeDataController extends Controller
{
    public function getCountries(){
        $countries= Country::all();

        return response()->json($countries);
    }

    public function getStates(Country $country){
        return response()->json($country->state);
    }

    public function getCities(State $state){
        return response()->json($state->city);
    }

    public function getDepartments(){
        $departments= Department::all();

        return response()->json($departments);
    }
}
