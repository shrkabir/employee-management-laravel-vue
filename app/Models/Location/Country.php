<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable= ['country_code', 'name'];

    public function state(){
        return $this->hasMany(State::class);
    }
}
