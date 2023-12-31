<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comic;

class ComicController extends Controller
{

    public function edit($id)
    {
        $comics = Comic::FindOrFail($id);
        return view("comics.edit", ["comics" => $comics]);
    }

    public function update(request $request, $id)
    {
        $comics = Comic::FindOrFail($id);
        $data = $request->validate([
            "title" => "required",
            "description" => "nullable|string",
            "thumb" => "nullable|string|max:500",
            "price" => "required|integer|min:1|max:10000",
            "series" => "nullable|string|max:255",
            "sales_date" => "nullable",
            "type" => "nullable",
            "artists" => "nullable|string",
            "writers" => "nullable|string"

        ]);

        $comics->update($data);
        return redirect()->route('comics.show', $comics->id);
    }


    public function create()
    {
        return view("comics.create");
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->artists = $data['artists'];
        // $newComic->writers = $data['writers'];

        $data = $request->validate([
            "title" => "required",
            "description" => "nullable|string",
            "thumb" => "nullable|string|max:500",
            "price" => "required|integer|min:1|max:10000",
            "series" => "nullable|string|max:255",
            "sales_date" => "nullable",
            "type" => "nullable",
            "artists" => "nullable|string",
            "writers" => "nullable|string"
        ]);
        // $data["writers"] = explode(",", $data["writers"]);
        // $data["artists"] = explode(",", $data["artists"]);
        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    public function index()
    {
        $comics = Comic::all();

        return view('layouts.public', ['comics' => $comics]);
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', ["comic" => $comic]);
    }


    public function destroy($id)
    {
        $comics = Comic::FindOrFail($id);
        $comics->delete();
        return redirect()->route('comics.index');
    }
}
