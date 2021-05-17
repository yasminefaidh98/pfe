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
        <i >  <img src="{{ asset('dist/img/client.png') }}" class="img-fluid" alt="">
        </i> Clients </a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="/categories" class="nav-link">
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

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">   
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modifier un Client</h3>
                <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ventes.index') }}">Retour</a>
               </div>
              </div>
         

<div class="main-content text-center">
  <div class="card text-center" style="-webkit-box-flex: 1; -ms-flex: 1 1 auto; flex: 1 1 auto; padding: 1.25rem">

    <form action="{{ route('ventes.update',$ventes->id_auto) }}" method="POST" class="form-style-9 ">
    @csrf
    @method('PUT')
    <div class="form-row ">
           
   
    <div class=" col-md-6">
      <label > Reference : </label>
      <input type="text" class="form-control"  name="reference" placeholder="reference:" value="{{ $ventes->agent_reference }}"><br/>
    </div>
    <div class="col-md-6">
      <label > Raison sociale : </label>
      <input type="text" class="form-control"  name="agent_raisonsocial" placeholder="Raison sociale" value="{{ $ventes->agent_raisonsocial }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Matricule fiscale: </label>
      <input type="text" class="form-control"  name="agent_matriculefiscale" placeholder="Matricule" value="{{ $ventes->agent_matriculefiscale }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Site web : </label>
      <input type="text" class="form-control"  name="agent_siteweb" placeholder="Site" value="{{ $ventes->agent_siteweb }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Adresse : </label>
      <input type="text" class="form-control"  name="agent_adresse" placeholder="Adresse" value="{{ $ventes->agent_adresse }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Famille : </label>
      <input type="text" class="form-control"  name="famille_agent_id" placeholder="Famille" value="{{ $ventes->famille_agent_id }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Région : </label>
      <input type="text" class="form-control"  name="region" placeholder="Région" value="{{ $ventes->region }}"><br/>
    </div>
    <div class=" col-md-6">
      <label > Actif : </label>
      <input type="number" class="form-control"  name="actif" placeholder="Actif" value="{{ $ventes->actif }}"><br/>
    </div>


    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary text-left">Modifier</button>
        </div>
    </div>

      </form>
    </div>
</div>
</body>


@endsection
