<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  protected $fillable = [
    "image",
    "image-hero",
    "image-cover",
    "title",
    "slug",
    "price",
    "body",
    "category_id"
  ];

  public function characters() {

    return $this->belongsToMany("App\Character", "comic_character");
  }

  public function category() {

    return $this->belongsTo("App\Category");
  }
}
