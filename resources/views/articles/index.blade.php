@extends('articles.layout')
 
@section('content')
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Create New article </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>reference</th> 
            <th>designation</th>
            <th>prix_achat_ht </th>
            <th>famille_id_auto</th> 
            <th>prix_vente_ht</th>
            <th>stock</th>
            <th>codebarre</th>
            <th>prix_vente_ttc</th>
            <th>marque</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
        <td>{{ $article->id_auto }}</td>
            <td>{{ $article->reference }}</td>
            <td>{{ $article->designation }}</td>
            <td>{{ $article->prix_achat_ht }}</td>
            <td>{{ $article->famille_id_auto }}</td>
            <td>{{ $article->prix_vente_ht }}</td>
            <td>{{ $article->stock }}</td>
            <td>{{ $article->codebarre }}</td>
            <td>{{ $article->prix_vente_ttc }}</td>
            <td>{{ $article->marque }}</td>
            <td>
                <form action="{{ route('articles.destroy',$article->id_auto) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('articles.show',$article->id_auto) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('articles.edit',$article->id_auto) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
        @endforeach
        </div>   
    </table>
  <span>

  {{ $articles->links()}}
  </sapan>
  <style>
    .w-5{
        display: none

    }
  </style>
  </div>
    
      
@endsection