<?php
  
namespace App\Http\Controllers;
   
use App\Models\std_matierepremiere;
use Illuminate\Http\Request;
  
class std_matierepremiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = std_matierepremiere::paginate(5);
    
        return view('articles.index',compact('articles'));
            
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'prix_achat_ht' => 'required',
            'famille_id_auto' => 'required',
            'prix_vente_ht' => 'required',
            'stock' => 'required',
            'codebarre' => 'required',
            'prix_vente_ttc' => 'required',
            'marque' => 'required',
        ]);
    
        std_matierepremiere::create($request->all());
     
        return redirect()->route('articles.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\std_matierepremiere  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        return view('articles.show', [
            'articles' => std_matierepremiere::findOrFail($id)
        ]);
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\std_matierepremiere  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('articles.edit', [
            'articles' => std_matierepremiere::findOrFail($id)
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\std_matierepremiere  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, std_matierepremiere $articles)
    {
        $request->validate([
           /* 'reference' => 'required',
            'designation' => 'required',*/
            'prix_achat_ht' => 'required'/*,
            'famille_id_auto' => 'required',
            'prix_vente_ht' => 'required',
            'stock' => 'required',
            'codebarre' => 'required'*/,
            'prix_vente_ttc' => 'required'/*,
            'marque' => 'required',*/
        ]);
    
        $articles->update($request->all());
    
        return redirect()->route('articles.index')
                        ->with('success','article updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\std_matierepremiere  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        std_matierepremiere::find($id)->delete();
    
        return redirect()->route('articles.index')
                        ->with('success','Product deleted successfully');
    }
}