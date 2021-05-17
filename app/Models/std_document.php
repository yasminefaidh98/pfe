<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_document extends Model
{
    use HasFactory;

    protected $table = 'std_document';
    protected $primaryKey = 'id_auto';
    protected $fillable = [
        'document_reference',
        'agent_id',
        'document_dateajout',

    ];
    public $timestamps = false;
}
