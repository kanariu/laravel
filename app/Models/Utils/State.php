<?php

namespace App\Models\Utils;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "tech_states";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'state',
        'name',
    ];

}
