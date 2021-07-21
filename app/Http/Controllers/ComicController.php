<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // nuova variabile comics dove salvo la collection Comics
        
        $comics = Comic::Paginate(5);
        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        {
            $data = $request->all();
    
           
            $comics = new Comic();
    
            // 2a: assegnazione valori
            // $beer->brand = $data["brand"];
            // $beer->name = $data["name"];
            // $beer->alcohol = $data["alcohol"];
            // $beer->price = $data["price"];
            // $beer->img = $data["img"];
            // $beer->description = $data["description"];
            // $slug = $data["brand"] . " " . $data["name"];
            // $beer->slug = Str::slug($slug, '-');
    
            // 2b: Mass assignment, slug si aggiunge a parte perché non viene inserito manualmente
            $slug = $data["title"] . " " . $data["series"];
            $data["slug"] = Str::slug($slug, '-');
    
            $comics->fill($data); 
            // IMPORTANTE: per utilizzare il fill(), serve aggiungere $fillable al Model
    
            // 3: salvataggio istanza
            $comics->save();
            
            //redirect per evitare di fare più upload, mi reindirizza al fumetto appena aggiunto
            return redirect()
                ->route('comics.show', $comics->id)
                ->with('message', "Il prodotto " . $comics->title . " è stato caricato");
                //with si collega a @sessions nella route di destinazione
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        return view("comics.show", compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $slug = $data["title"] . " " . $data["series"];
        $data["slug"] = Str::slug($slug, '-');        
        $comic->update($data); 
        // ricordarsi di aggiungere il $fillable al Model
        
        return redirect()
            ->route('comics.show', $comic->id)
            ->with('message', "Il prodotto " . $comic->title . " è stato modificato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
