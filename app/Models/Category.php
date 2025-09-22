<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['name', 'name_ar', 'name_fr', 'icon'];

    public function objectItems()
    {
        return $this->hasMany(ObjectItem::class);
    }
    
}
