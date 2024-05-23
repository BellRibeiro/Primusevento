<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $guarded= [];
    protected $dates = 'date';


     // Definindo o relacionamento de pertencimento
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

   // belongsTo - indica que cada evento pertence a um usuário específico.
}
