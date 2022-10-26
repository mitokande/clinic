<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use willvincent\Rateable\Rateable;
use willvincent\Rateable\Rating;

class Doctor extends Authenticatable implements Viewable
{
    use HasFactory, Rateable, InteractsWithViews;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
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

    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }

    public static function getUsername($first_and_last_name){

        $username = str_replace(" ","-",$first_and_last_name);
        $username = mb_strtolower($username,'UTF-8');
        $username = strtr($username, ['ü'=>'u','ö'=>'o','ı'=>'i','ş'=>'s','ğ'=>'g']);
        return $username;
    }

    public function scopeSearch($query,$term){
        $term = '%'.$term.'%';
        return $query->where(function($query) use($term){
            $query->where('first_name','like',$term)
                ->orWhere('last_name','like',$term);
        });
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
    public function field(){
        return MedicineField::find($this->medicine_field_id);
    }

}
