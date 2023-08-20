<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Situacao;

class Participacao extends Model
{
    protected $table = 'participacoes';

    protected $fillable = [
        'user_id',
        'pontos',
        'subjugacao',
        'tartarus',
        'check_in',
        'status_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function situacao(): BelongsTo
    {
        return $this->belongsTo(Situacao::class, 'status_id');
    }
}

