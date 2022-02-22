<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artimages extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'alt',
        'articles_id',
    ];
    /**
         * Get the user associated with the artimages
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function Articles()
        {
            return $this->belongsTo(Articles::class);
        }
    }

