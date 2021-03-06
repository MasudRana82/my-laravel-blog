<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['id', 'cat_id', 'title', 'description', 'status', 'image','reads'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id'); //here 'cat_id' is foreign key. 
    }



    public function tag() //for show tag
    {
        return $this->belongsToMany('App\Models\Tag');
    }
     
    public function viewscount()
    {
        $this->reads++;

        return $this->save();
    } 

   
}
