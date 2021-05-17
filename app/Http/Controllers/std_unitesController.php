<?php

namespace App\Http\Controllers;
use App\Models\std_unites;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class std_unitesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $unites = std_unites::paginate(5);

      return view('unites.index',compact('unites'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unites.create');
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
              
              'reference' => 'required',
              'designation' => 'required',
              'symbole' => 'required',

        ]);

        std_unites::create($request->all());

        return redirect()->route('unites.index')
                        ->with('success','Unité créée avec succés');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\std_famille  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('unites.edit', [
            'unites' => std_unites::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\std_unites  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $share = std_unites::find($id);
       
        $share->reference= $request->get('reference');
        $share->designation = $request->get('designation');
        $share->symbole = $request->get('symbole');
         $share->save();
        return redirect()->route('unites.index')
         ->with('success','unité modifiée avec succés ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\std_famille  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_auto)
    {
        std_unites::find($id_auto)->delete();

        return redirect()->route('unites.index')
                        ->with('success','unité supprimée avc succés');
    }




}
