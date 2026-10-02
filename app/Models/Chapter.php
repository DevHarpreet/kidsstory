<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Chapter extends Model
{
    use HasUuids;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'placeholder_image',
        'banner_image',
        'json_dataset',
        'story_id'
    ];

    public function story(){
        return $this->belongsTo(Story::class);
    }
}
