<?php

namespace App;

use App\Notifications\ClientResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\City;
use App\SuccessStory;
use App\AdminToClientMessages;

class Client extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'username', 'phone', 'gender', 'main_description', 'city_id', 'other_person_description', 'dob', 'marraige_status', 'social_status', 'children_number', 'weight', 'height', 'skin_color', 'physique', 'education', 'financial_status', 'health_details', 'career_field', 'job', 'salary', 'online', 'image', 'approved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ClientResetPassword($token));
    }


    /*
        -friend,mail
    */

    public function blacklisted()
    {
        return $this->belongsToMany(Client::class, 'blacklists', 'client_id', 'friend_id');
    }

    public function city ()
    {
        return $this->belongsTo(City::class);
    }

    public function successStories()
    {
        return $this->hasMany(SuccessStory::class);
    }

    public function friends()
    {
        return $this->belongsToMany(Client::class, 'friends', 'client_id', 'friend_id');
    }

    public function mails()
    {
        return $this->belongsToMany(Client::class, 'mails', 'sender_id', 'receiver_id');
    }

}
