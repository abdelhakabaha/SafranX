<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'produits',
        'user_id',
        'quantite',
        'isValid',
        'date_command',
    ];

    public function produit(){
        return $this->belongsTo(Produits::class, 'produits');
    }
}
