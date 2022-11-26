<?php

namespace App\Models\Location;

use App\Models\Location\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable= ['country_code', 'name'];

    public function state(){
        return $this->hasMany(State::class);
    }
}
