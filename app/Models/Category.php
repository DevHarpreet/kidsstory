<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Category extends Model
{
    use HasUuids; //we use trait, we do not extend it like a class's parent class such class category extends HasUuids is wrong because HasUuids is a trait.

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'placeholder_image',
        'banner_image'
    ];

    public function stories(){
        //$this means.. this category belongs to many storeies.. so fetch all those stories that belongs to this category.
        return $this->belongsToMany(Story::class);
    }
}
