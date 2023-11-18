<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Url;
use App\Models\InfoUser;
use App\Models\Interest;
use App\Models\Framework;
use App\Models\DataPersonal;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function userInterest()
    {
        return $this->hasMany(Interest::class);
    }

    public function userFramework()
    {
        return $this->hasMany(Framework::class);
    }

    public function userInfoUser()
    {
        return $this->hasMany(InfoUser::class);
    }

    public function userDataPersonal()
    {
        return $this->hasMany(DataPersonal::class);
    }

    public function userDataURL()
    {
        return $this->hasMany(Url::class);
    }


}
