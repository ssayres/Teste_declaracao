<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model {
    use HasFactory;

    protected $primaryKey = 'id_declaracao';

    public function contentItems()
    {
        $this->hasMany(ContentItem::class, "id_content", "id_declaracao");
    }
   
}