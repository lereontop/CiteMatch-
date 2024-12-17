<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $fillable = [
        'thesis_id', 'citation_text', 'page_number',
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
