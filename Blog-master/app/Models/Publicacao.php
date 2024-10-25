<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    protected $fillable = ['foto', 'titulo', 'local', 'cidade', 'empresa_id', 'comentario_id', 'avaliacao_id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function comentario()
    {
        return $this->hasMany(Comentario::class);
    }

    public function curtida()
    {
        return $this->hasMany(Curtida::class);
    }
}
