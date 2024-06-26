<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articl extends Model
{
    use HasFactory;
    public $fillable = [
        "titre", "description", "image", "user_id"
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
