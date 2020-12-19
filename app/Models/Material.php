<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Material extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'theme', 'description', 'meta_title', 'meta_description', 'meta_keyword' , 'active', 'created_by', 'modified_by'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHis'), '-');
      }

    public function pages()
    {
        return $this->morphToMany('App\Models\Page', 'pageable');
    }
}
