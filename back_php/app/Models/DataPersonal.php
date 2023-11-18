<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DataPersonal extends Model
{

    use HasFactory;
    protected $fillable = [
        'edad',
        'pais',
        'ciudad',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
