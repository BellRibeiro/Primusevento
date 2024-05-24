<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
   public function users(): BelongsToMany
   {
       return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
   }
}
