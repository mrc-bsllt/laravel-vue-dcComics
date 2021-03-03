<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public $timestamps = false;

  protected $fillable = [
    "name",
    "slug",
    "description"
  ];

  public function comics() {

    return $this->hasMany("App\Comic");
  }
}
