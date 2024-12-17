<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    // use HasFactory;

    protected $fillable = [
        'thesis_id', 'reference_text',
    ];

    public function thesis()
    {
        return $this->belongsTo(Thesis::class);
    }

    public function matches()
    {
        return $this->hasMany(CitationReferenceMatch::class);
    }
}
