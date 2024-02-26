<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Agencia extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'agencias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'descricao',
        'provincia',
        'municipio',
        'bairro',
        'nif',
        'numeroAgente',
    ];
    protected $guarded = ['id'];
}
