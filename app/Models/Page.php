<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'parent_id', 'active', 'created_by', 'modified_by'];
    

    public function setSlugAttribute($value) {
      $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHis'), '-');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function materials()
    {
      return $this->morphedByMany('App\Models\Material', 'pageable');
    }
    public function scopeLastPages($query, $count){
      return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
