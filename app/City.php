<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\Client;

class City extends Model
{
    protected $fillable = [
        'country_id', 'name'
    ];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function clients()
    {
    	return $this->hasMany(Client::class);
    }
}
