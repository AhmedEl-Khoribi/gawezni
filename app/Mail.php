<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'sender_id', 'receiver_id', 'read', 'body'
    ];
}
