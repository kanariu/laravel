<?php

namespace App\Models\Acess;

use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;

class User extends Model
{

    protected $table = "tech_users";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'birthdate',
        'email',
        'ddd',
        'phone',
        'cpf',
        'username',
        'password',
        'address',
        'city',
        'zipcode',
        'state'
    ];

}
