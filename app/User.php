<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name',
        'email'
    ];

    protected $guarded = [
        'password'
    ];

    public function actingAs(...$roles)
    {
        $this->role = 'Admin';

        return in_array($this->role, $roles);
    }

}