@extends('articles.layout')
  
@section('content')







<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


<div class="container center_div"   >
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show articles</h2><br/>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="col-md-4 col-md-offset-4">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>reference :</strong>
                {{ $articles->reference }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>designation :</strong>
                {{ $articles->designation }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pa_ht:</strong>
                {{ $articles->prix_achat_ht }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>famille_id_auto:</strong>
                {{ $articles->famille_id_auto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix_vente_ht: </strong>
                {{ $articles->prix_vente_ht }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>stock :</strong>
                {{ $articles->stock }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>codebarre :</strong>
                {{ $articles->codebarre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>prix_vente_ttc : 
                {{ $articles->prix_vente_ttc }}</strong> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>marque:</strong>
                {{ $articles->marque }}
            </div>
        </div>
    </div>
    </div>   
    </div> 
@endsection