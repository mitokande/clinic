<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'telephone',
        'email',
        'password',
        'profile_picture'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * @return bool
     */
    public function isFullyRegistered(){
        if($this->gender != null && $this->age != 0 && $this->weight != 0 && $this->height != 0){
            return true;
        }
        return false;
    }


    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }


}
