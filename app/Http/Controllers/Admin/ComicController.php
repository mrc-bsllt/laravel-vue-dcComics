<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 *
 *  ENTITY MODELS
 */

use App\Comic;
use App\Character;
use App\Category;

class ComicController extends Controller
{

    private $comicValidation = [
        'title' => 'required|max:100',
        'price' => 'required|numeric',
        'body' => 'required',
        'image' => 'required|image',
        'image-hero' => 'required|image',
        'image-cover' => 'required|image'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

      return view("admin.comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.comics.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate($this->comicValidation);

        $comic = new Comic();
        $comic->category_id = $data['category'];
        $comic->slug = Str::slug($data['title']);
        $data['image'] = Storage::disk('public')->put('images', $data['image']);
        $data['image-hero'] = Storage::disk('public')->put('images', $data['image-hero']);
        $data['image-cover'] = Storage::disk('public')->put('images', $data['image-cover']);
        $comic->fill($data);
        $comic->save();

        return redirect()->route('admin.comics.index')->with('success','Comic '.$comic->title.' created successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

      return view("admin.comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
      return view("admin.comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
