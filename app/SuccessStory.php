<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class SuccessStory extends Model
{
    protected $fillable = [
        'client_id', 'message'
    ];

    public function ()
    {
    	return $this->belongsTo(Client::class);
    }
}
