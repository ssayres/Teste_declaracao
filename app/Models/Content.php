<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['idProduct','cCusto','content','quantity','value'];
    protected $primaryKey = 'id_declaracao';
}
