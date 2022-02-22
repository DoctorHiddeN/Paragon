<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'client_number',
        'user_id',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
