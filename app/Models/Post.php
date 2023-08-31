<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'tag_id',
        'photo',
        'slug',
        'user_id'
    ];
    protected $dates = ['deleted_at'];
   public function categories()
   {
       return $this->belongsTo(Category::class,'id');
   }

   public function tags()
   {
       return $this->belongsToMany(Tag::class);
   }

   public function hasTags($tagId)
   {
       return in_array($tagId,$this->tags->pluk('id')->toArray());
   }
   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function scopeOmar($query) {
    $search = request()->query('search');
    if(!$search) {
        return $query;
    }

    return $query->where('title','LIKE',"%{$search}%");
}
}
