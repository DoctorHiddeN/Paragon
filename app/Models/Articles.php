<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'thumbnail',
    ];
    public function artimages()
    {
        return $this->hasMany(artimages::class);
    }
    public function Comments(){
        return $this->hasMany(Comments::class);
    }
    public function Categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
