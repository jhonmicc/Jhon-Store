<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'users_id', 'categories_id', 'price', 'description', 'slug'
    ];

    protected $hidden = [];
    /* To simplify the syntax, think of the return $this->hasMany('App\Comment', 'foreign_key', 'local_key'); parameters as:
1. The model you want to link to
2. The column of the foreign table (the table you are linking to) that links back to the id column of the current table (unless you are specifying the third parameter, in which case it will use that)
3. The column of the current table that should be used - i.e if you don't want the foreign key of the other table to link to the id column of the current table*/

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
