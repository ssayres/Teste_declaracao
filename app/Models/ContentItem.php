<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentItem extends Model {
    use HasFactory;

    protected $fillable = [
        'id_content',
        'id_product',
        'cost_center',
        'content',
        'quantity',
        'value'
    ];

    public function setValueAttribute($value){
        $this->attributes['value'] = str_replace([".", ","], ["", "."], $value);
    }
}