<?php

namespace App\Http\Controllers\Backend\API;

use Illuminate\Http\Request;
use App\Models\Location\Country;
use App\Http\Controllers\Controller;

class EmployeeDataController extends Controller
{
    public function getCountries(){
        $countries= Country::all();

        return response()->json($countries);
    }

    public function getStates(Country $country){
        return response()->json($country->state);
    }
}
