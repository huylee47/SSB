<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'blogs';
    protected $fillable = ['title', 'avatar', 'user_id', 'content', 'description', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $slug = Str::slug($blog->title);
                $count = Blog::where('slug', 'like', "{$slug}%")->count();
                $blog->slug = $count > 0 ? "{$slug}-" . ($count + 1) : $slug;
            }
        });
    }
}
