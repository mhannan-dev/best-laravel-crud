<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_offer');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_offer');
    }
}
