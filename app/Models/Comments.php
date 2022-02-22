<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'articles_id',
        'body',
        'flag',
    ];
    public function Articles(){
        return $this->BelongsTo(Articles::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}   
