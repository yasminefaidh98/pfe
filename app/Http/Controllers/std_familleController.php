<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\std_famille;
use Illuminate\Support\Facades\View;

class std_familleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = std_famille::paginate(5);

      return view('categories.index',compact('categories'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_auto' => 'required',

              'reference' => 'required',
              'designation' => 'required',
              'categorie' => 'required',

        ]);

        std_famille::create($request->all());

        return redirect()->route('categories.index')
                        ->with('success','Categorie ajoutée avec succés .');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\std_famille $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\std_famille  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('categories.edit', [
            'categories' => std_famille::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\std_matierepremiere  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $share = std_famille::find($id);
       
        $share->reference= $request->get('reference');
        $share->designation = $request->get('designation');
        $share->categorie = $request->get('categorie');
         $share->save();
        return redirect()->route('categories.index')
         ->with('success','categorie modifiée avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\std_famille  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_auto)
    {
        std_famille::find($id_auto)->delete();

        return redirect()->route('categories.index')
                        ->with('success','Catégorie supprimée avec succés');
    }
}
