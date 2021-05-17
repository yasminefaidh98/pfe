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
        <a href="/ventes" class="nav-link">
        <i >  <img src="{{ asset('dist/img/client.png') }}" class="img-fluid" alt="">
        </i> Clients </a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="/documents" class="nav-link">
        <i >  <img src="{{ asset('dist/img/doc.png') }}" class="img-fluid" alt="">
          </i> Documents de ventes </a>
      </li> 

      




    </ul>

    <!-- SEARCH FORM -->

    <form class="form-inline ml-3 push-left">
    <div class="text-right">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
      </div>
    </form>

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
    <a class="btn btn-success" href="{{ route('ventes.create') }}"><i class="fas fa-plus-square" ></i> Ajouter un nouveau client </a>
</div>



<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des clients</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" id="search" placeholder="Search" >

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" > <i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
        
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap"  id="employee_table">
                  <thead>
                    <tr>
                    <th></th>
                      
                      <th>réference</th>
                      <th>raison social</th>
                      <th>matricule fiscale</th>
                      <th>site web</th>
                      <th>adresse</th>
                      <th>famille</th>
                      <th>region</th>
                      <th>actif</th>


                      <th scope="col" colspan=2 class="text-left" >Action</th>

                    </tr>
                    @foreach ($ventes as $vente)
                    <tr>
                   <td></td>
                   <td>{{ $vente->id_auto }}</td>
                   <td>{{ $vente->agent_raisonsocial }}</td>
                   <td>{{ $vente->agent_matriculefiscale }}</td>
                   <td>{{ $vente->agent_siteweb }}</td>
                   <td>{{ $vente->agent_adresse }}</td>
                   <td>{{ $vente->famille_agent_id }}</td>
                   <td>{{ $vente->region }}</td>
                   <td>{{ $vente->actif }}</td>

                   <td>
                    <form action="{{ route('ventes.destroy',$vente->id_auto) }}" method="POST">

                           <a class="btn btn-warning " href="{{ route('ventes.edit',$vente->id_auto) }}">
                           <i class="fas fa-edit"></i>
                           </a>

                           @csrf
                           @method('DELETE')

                           <button type="submit" class=" btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                        
                       </form> 

                  </thead>
                  <tbody>

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

     {{ $ventes->links()}}
    </span></br>
     <style>
    .w-5{
        display: none
      }

    </style>
</br></div>
        @endsection
