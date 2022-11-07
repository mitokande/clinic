<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Blog extends Model implements Viewable
{
    use HasFactory, Rateable, InteractsWithViews;

    public function slugName(){
        $slug = str_replace(" ","-",$this->title);
        $slug = mb_strtolower($slug,'UTF-8');
        $slug = strtr($slug, ['ü'=>'u','ö'=>'o','ı'=>'i','ş'=>'s','ğ'=>'g']);
        $slug = preg_replace("/[^A-Za-z0-9 ]/", '', $slug);

        return $slug;
    }

    public function user()
    {
        return $this->belongsTo(Doctor::class,'author_id');
    }

    public function setSlugName($slug){

    }
    public function Categories(){
        $categoriesOfPost = [];
        foreach (json_decode($this->category) as $categoryName){
            $categoriesOfPost[] = MedicineField::query()->where('name','=',$categoryName)->firstOrFail();
        }
        return $categoriesOfPost;
    }
}
