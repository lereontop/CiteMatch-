<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description', 'file_path', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function citations()
    {
        return $this->hasMany(Citation::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }
}
