<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; // Menambahkan impor untuk AuthenticatableContract
use Tymon\JWTAuth\Contracts\JWTSubject; // Menghapus backslash (\) pada namespace Tymon\JWTAuth\Contracts\JWTSubject
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Authenticatable implements AuthenticatableContract, JWTSubject // Menambahkan AuthenticatableContract dan JWTSubject
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    // Implementasi dari JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
