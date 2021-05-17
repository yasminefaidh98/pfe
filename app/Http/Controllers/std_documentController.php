<?php

namespace App\Http\Controllers;

use App\Models\std_document;
use App\Models\std_agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class std_documentController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $documents = std_document::paginate(5);

      return view('documents.index',compact('documents'));

    }

    public function create()
    {

      $client = std_agent::all();
        return view('documents.create')->with("clients", $client);
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

            'document_reference' => 'required',
              'agent_id' => 'required',
              'document_dateajout' => 'required',
        ]);

        std_document::create($request->all());

        return redirect()->route('documents.index')
                        ->with('success','ok');
    }




}
