<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belomgsTo(User::class);
    }
    public function topicos()
    {
        return $this->belongsTo(User::class);
    }
}
