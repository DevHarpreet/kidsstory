<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Story extends Model
{
    use HasUuids;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'placeholder_image',
        'banner_image',
        'json_dataset'
    ];

    public function categories(){
       return $this->belongsToMany(Category::class);
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }

    public function ageGroups(){
        return $this->belongsToMany(AgeGroup::class);
    }
}
