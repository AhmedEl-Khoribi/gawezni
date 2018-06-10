<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
        'phone_number1', 'phone_number2', 'fax', 'email1', 'email2', 'map'
    ];
}
