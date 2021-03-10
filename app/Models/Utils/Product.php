<?php

namespace App\Models\Utils;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tech_produtos";
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'name_en',
        'name_pt',
        'img_link',
        'description',
        'price',
        'spec_link',
        'type',
        'promotion_price',
        'promotion',
        'highlight',
    ];
}
