<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planos extends Model
{
    use HasFactory;
    protected $fillable =['nome', 'download', 'upload', 'inicio', 'fim', 'valor'];
}
