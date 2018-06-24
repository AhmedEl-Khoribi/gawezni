<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Blacklist extends Model
{
    protected $fillable = [
        'client_id', 'friend_id'
    ];

}
