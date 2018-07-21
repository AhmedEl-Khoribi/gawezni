<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminToClientMessages extends Model
{
    protected $fillable = [
        'sender_id', 'receiver_id', 'is_read', 'body'
    ];
}
