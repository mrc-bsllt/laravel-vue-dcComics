<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  public function characters() {
    protected $fillable = [
      "image",
      "image-hero",
      "image-cover",
      "title",
      "slug",
      "price",
      "body"
    ];

    return $this->belongsToMany("App\Character", "comic_character");
  }
}
