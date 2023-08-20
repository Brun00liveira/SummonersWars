<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Participacao;


class Situacao extends Model
{
    protected $table = 'situacoes';

    protected $fillable = [
    'codigo',
    'status'
   ];

   public function participacoes(): HasMany
    {
        return $this->hasMany(Participacao::class);
    }

}
