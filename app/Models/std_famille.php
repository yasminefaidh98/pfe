<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_famille extends Model
{
    use HasFactory;


    protected $table = 'std_famille';
    protected $primaryKey = 'id_auto';
    protected $fillable = [
         'reference','designation','categorie',
    ];
    public $timestamps = false;


}
