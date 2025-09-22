<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectItem extends Model
{
    //

    protected $fillable = ['name', 'name_ar', 'name_fr', 'icon', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
