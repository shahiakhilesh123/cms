<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'blogs';

    public function scopeJoinSequence($query){
        $query->leftjoin('page_sequences', function($join) {
            $join->on('page_sequences.blog_id', '=', 'blogs.id');
        });
    }
}
