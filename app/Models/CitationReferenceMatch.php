<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitationReferenceMatch extends Model
{
    protected $fillable = [
        'citation_id', 'reference_id', 'match_status',
    ];

    public function citation()
    {
        return $this->belongsTo(Citation::class);
    }

    public function reference()
    {
        return $this->belongsTo(Reference::class);
    }
}
