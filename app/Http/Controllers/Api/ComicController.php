<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Category;
use App\Character;

class ComicController extends Controller
{
    public function index() {
        // $categories = Category::all();
        $comics = Comic::with(['category','characters'])->get();
    
        return response()->json($comics);

    }
}
    
