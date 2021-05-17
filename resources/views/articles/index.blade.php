@extends('articles.dash')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">
        <i class="fas fa-home"></i>  Home</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="/articles" class="nav-link">
        <i >  <img src="{{ asset('dist/img/list.png') }}" class="img-fluid" alt="">
        </i> Liste </a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="/categories" class="nav-link">
        <i >  <img src="{{ asset('dist/img/cat.png') }}" class="img-fluid" alt="">
          </i> Catégories </a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="/unites" class="nav-link">
        <i >  <img src="{{ asset('dist/img/unit.png') }}" class="img-fluid" alt="">
          </i>Unités </a>
      </li>




    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('ist/img/user8-128x128.jpg') }}d" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


      @section('content')

  


<div class="container">


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="main-content">
  <div class="card " style="-webkit-box-flex: 1; -ms-flex: 1 1 auto; flex: 1 1 auto;">
  <div class="text-right">
    <a class="btn btn-success" href="{{ route('articles.create') }}"><i class="fas fa-plus-square" ></i> Ajouter un nouveau article </a>
</div>



<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listes articles</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" id="search" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap"  id="employee_table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>REF</th>
                      <th>Designation</th>
                      <th>Prix achat ht</th>
                      <th>Famille id</th>
                      <th>Prix vente ht</th>
                      <th>Stock</th>
                      <th>Codebarre</th>
                      <th>Prix vente ttc</th>
                      <th>Marque</th>
                      <th></th>
                      <th scope="col" colspan=3 class="text-center" >Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($articles as $article)
      <tr>
            <th>{{ $article->id_auto }}</th>
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
                    <td>
                    <a class="btn btn-warning pull-right" href="{{ route('articles.edit',$article->id_auto) }}"><i class="fas fa-edit"></i></a>
                    </td>
                    @csrf
                    @method('DELETE')
                    <td>
                    <button type="submit" class=" btn btn-danger pull-right"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </form>
            </td>
      </tr>
      @endforeach 
             </tbody>
           </table>
           
    
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  
       
        <!-- /.row -->






<div class="container" >
     <span class="text-center">

         {{ $articles->links()}}
    </span></br>
     <style>
    .w-5{
        display: none
      }

    </style>
</br></div>


@endsection
