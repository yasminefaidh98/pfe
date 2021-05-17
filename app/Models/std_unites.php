<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_unites extends Model
{
    use HasFactory;

    protected $table = 'std_unites';
    protected $primaryKey = 'id_auto';
    protected $fillable = [
        'designation','symbole','reference',
    ];
    public $timestamps = false;

}
