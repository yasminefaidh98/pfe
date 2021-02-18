<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_matierepremiere extends Model
{
    use HasFactory;
    
    protected $table = 'std_matierepremiere';
    protected $primaryKey = 'id_auto';
    protected $fillable = ['id_auto',
        'reference' ,
            'designation' ,
            'prix_achat_ht' ,
            'famille_id_auto' ,
            'prix_vente_ht' ,
            'stock' ,
            'codebarre' ,
            'prix_vente_ttc' ,
            'marque' 
    ];
    public $timestamps = false;
}
