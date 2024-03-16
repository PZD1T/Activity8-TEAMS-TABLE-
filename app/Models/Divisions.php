<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    use HasFactory;

    protected $table = "divisions";
    public $timestamps = false;

    public function conference()
    {
        return $this->belongsTo(Conference::class, 'conference_id');
    }
}
