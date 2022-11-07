<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $fillable = ['rating'];

    public function rateable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(Patient::class);
    }
    public function answerer()
    {
        return $this->belongsTo(Doctor::class,'rateable_id');
    }
}
