<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'image', 'title', 'slug', 'body'];

    public static function getSlug()
    {
        $slug = Str::of('title')->slug('-');
        $count = 1;
        while (Project::where('slug', $slug)->first()) {
            $slug = Str::of('title')->slug('-') . "{$count}";
            $count++;
        }
        return $slug;
        ;
    }
}

