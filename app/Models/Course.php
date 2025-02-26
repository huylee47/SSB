<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['title', 'description', 'thumbnail', 'content','slug'];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if (empty($course->slug)) {
                $slug = Str::slug($course->title);
                $count = Course::where('slug', 'like', "{$slug}%")->count();
                $course->slug = $count > 0 ? "{$slug}-" . ($count + 1) : $slug;
            }
        });
    }
}
