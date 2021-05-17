<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class std_agent extends Model
{
    use HasFactory;

    protected $table = 'std_agent';
    protected $primaryKey = 'id_auto';
    protected $fillable = [
         'agent_reference',
         'agent_raisonsocial',
         'agent_matriculefiscale', 
         'agent_siteweb', 
          'agent_adresse',  
          'famille_agent_id', 
           'region',
           'actif', 

    ];
    public $timestamps = false;
}
