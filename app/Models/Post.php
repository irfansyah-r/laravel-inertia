<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];
    protected $appends = ['PublishedAt'];

    public function getPublishedAtAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
