<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti_pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'foto',
    ];
}
