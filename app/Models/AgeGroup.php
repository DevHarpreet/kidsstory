<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class AgeGroup extends Model
{
    use HasUuids;

    protected $fillable = [
        'title'
    ];

    public function stories(){
        return $this->belongsToMany(Story::class);
    }
}
