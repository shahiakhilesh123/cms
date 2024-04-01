<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected  $fillable  = ['name', 'user_id','link', 'sort_description', 'image_id', 'categories_ids',  'description']; 
}