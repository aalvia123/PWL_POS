<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table ='m_user';     //Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // mendefinisikan primary key dari tabel yang digunakan

    /**
     * the atributes that are mass asignable
     *
     * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama', 'password' ];
}
