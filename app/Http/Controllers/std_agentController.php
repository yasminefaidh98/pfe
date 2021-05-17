<?php

namespace App\Http\Controllers;
use App\Models\std_agent;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class std_agentController extends Controller
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ventes = std_agent::paginate(8);

      return view('ventes.index',compact('ventes'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventes.create');
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
            'agent_reference' => 'required',

              'agent_raisonsocial' => 'required',
              'agent_matriculefiscale' => 'required',
              'agent_siteweb' => 'required',
              'agent_adresse' => 'required',
              'famille_agent_id' => 'required',
              'region' => 'required',
              'actif' => 'required',
        ]);

        std_agent::create($request->all());

        return redirect()->route('ventes.index')
                        ->with('success','Client a été crée avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\std_agent $agent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\std_agent  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ventes.edit', [
            'ventes' => std_agent::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\std_agent $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $share = std_agent::find($id);

       
        $share->agent_reference= $request->get('agent_reference');
        $share->agent_raisonsocial = $request->get('agent_raisonsocial');
        $share->agent_matriculefiscale = $request->get('agent_matriculefiscale');
        $share->agent_siteweb= $request->get('agent_siteweb');
        $share->agent_adresse = $request->get('agent_adresse');
        $share->famille_agent_id = $request->get('famille_agent_id');
        $share->region = $request->get('region');
        $share->actif = $request->get('actif');

         $share->save();        
        return redirect()->route('ventes.index')
         ->with('success','Client modifié avec succés ');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\std_agent  $vente
     * @return \Illuminate\Http\Response
     */
     public function destroy($id_auto)
    {
        std_agent::find($id_auto)->delete();

        return redirect()->route('ventes.index')
                        ->with('success','Client supprimé avec succés ');
    }

}
