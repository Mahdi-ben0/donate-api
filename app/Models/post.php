<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $fillable = ['title', 'details', 'address', 'wilaya_id', 'commun_id', 'category_id', 'object_item_id', 'condition', 'avalibility', 'image_paths', 'user_id', 'status'];

    protected $casts = [
    'image_paths' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function wilaya()
    {
        return $this->belongsTo(wilaya::class);
    }
    
    public function commun()
    {
        return $this->belongsTo(commun::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function objectItem()
    {
        return $this->belongsTo(ObjectItem::class);
    }
}
