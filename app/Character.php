<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  public function comics() {
    protected $fillable = [
      "name",
      "slug",
      "image-hero",
      "description"
    ];

    return $this->belongsToMany("App\Comic", "comic_character");
  }
}
