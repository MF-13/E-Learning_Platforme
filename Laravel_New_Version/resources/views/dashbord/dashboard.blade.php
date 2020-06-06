<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <link rel="stylesheet" href={{ asset("js/dash/vendor/fontawesome-free/css/all.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/dash/css/sb-admin-2.min.css") }}>
  <link rel="stylesheet" href={{ asset("js/dash/vendor/datatables/dataTables.bootstrap4.min.css") }}>
  <link rel="stylesheet" href={{ asset("css/dash/css/style.css") }}>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
  <title>@yield('title')</title>
 {{-- traitement des lien nécessaire--}}
</head>

<body id="page-top">
    <div class="dash">

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
              <style type="text/css">
                /*la couleur de la bare du dash*/
                #accordionSidebar{
                  background-color: #da1b3e;
                  background-image: linear-gradient(90deg, rgba(46,46,46,1) 0%, rgba(46,46,46,1) 35%, rgba(46,46,46,1) 100%);
                  background-size: cover;
                }
              </style>
              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">EST-Learning</div>
              </a>
              <!-- Divider -->
              <hr class="sidebar-divider my-0">
              <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/demande')}}">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span>Demande</span></a>
              </li>
              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span class="glyphicon glyphicon-search" aria-hidden="true">User</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{url('/etudiant')}}">Etudiant</a>
                  <a class="collapse-item" href="{{url('/professeur')}}">Professeur</a>
                    <a class="collapse-item" href="{{route('dashbord.create')}}">Ajouter</a>
                  </div>
                </div>
              </li>
              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span>Filieres</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('/filiere')}}">Afficher</a>
                    <a class="collapse-item" href="{{url('/filiere_traitement')}}">Ajouter</a>
                  </div>
                </div>
              </li>
              <hr class="sidebar-divider">

               <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span>Modules</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('/cours')}}">Afficher</a>
                  <a class="collapse-item" href="{{url('/Cour_Add')}}">Ajouter</a>
                  </div>
                </div>
              </li>
              <hr class="sidebar-divider">

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span>departement</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('/departement')}}">Afficher</a>
                  </div>
                </div>
              </li>
              <hr class="sidebar-divider">

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                  <i class="fas fa-fw fa-sliders-h"></i>
                  <span>Opinion</span>
                </a>
                <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('/Comments')}}">Afficher</a>
                  </div>
                </div>
              </li>
              <hr class="sidebar-divider">
              
              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
              <!-- Main Content -->
              <div id="content">
        
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>
        
                
        
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
        
                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                          <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>
        
                
        
                    <div class="topbar-divider d-none d-sm-block"></div>
        
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong>{{ strtoupper(Auth::user()->nom_user) }}&nbsp;{{ strtoupper(Auth::user()->prenom_user) }}</strong> </span>
                        <i class="fas fa-user-shield fa-1x" style="color : black"></i>
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{url('/')}}">
                          <i class="fas fa-chalkboard fa-sm fa-fw mr-2 text-gray-400"></i><!--Aller au profile-->
                          retourner au site
                        </a>
                      <a class="dropdown-item" href="{{url('/dashbord')}}">
                          <i class="fas fa-id-card-alt fa-sm fa-fw mr-2 text-gray-400"></i><!--Aller au profile-->
                          Profile
                        </a>
                        <a class="dropdown-item" href="{{url('/message')}}">
                          <i class="fas fa-envelope-square fa-sm fa-fw mr-2 text-gray-400"></i><!--Aller au profile-->
                          Message
                        </a>
                        <div class="dropdown-divider"></div>
                        
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{ __('Déconnexion') }}
                          </a> 
            
                    {{-- Button de deconnexion --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        
                      </div>
                    </li>
                  </ul>
                </nav>
                <!-- End of Topbar -->

    </div>
    
    <div class="status">
        {{-- Traitement pour ajouter la partie de alert de succes ou de  error --}}
        @if(session()->has('status'))
          <div class="alert alert-success">
            <i class="far fa-check-square"></i> L'opération s'effectue avec <strong>Success!</strong>&nbsp;{{session()->get('status')}}
          </div>
        @elseif(session()->has('false'))
          <div class="alert alert-danger">
            <i class="far fa-check-square"></i> <strong>Erreure</strong>&nbsp;{{session()->get('false')}}
          </div>
        @endif
      
    </div>

    

    <div class="body">

        @yield('content')

    </div>

       <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      
      <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

</body>
<footer>
  
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; EST-LEARNING 2020</span>
    </div>
  </div>
    {{-- linear-gradient(90deg, rgba(46,46,46,1) 0%, rgba(46,46,46,1) 35%, rgba(46,46,46,1) 100%) --}}
  {{-- Script --}}

  <script src={{ asset("js/dash/vendor/jquery/jquery.min.js") }}></script>
  <script src={{ asset("js/dash/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

  <!-- Core plugin JavaScript-->
  <script src={{ asset("js/dash/vendor/jquery-easing/jquery.easing.min.js") }}></script>

  <!-- Custom scripts for all pages-->
  <script src={{ asset("js/dash/sb-admin-2.min.js") }}></script>

  <!-- Page level plugins -->
  <script src={{ asset("js/dash/vendor/datatables/jquery.dataTables.min.js") }}></script>
  <script src={{ asset("js/dash/vendor/datatables/dataTables.bootstrap4.min.js") }}></script>

  <!-- Page level custom scripts -->
  
  <script src={{ asset("js/dash/vendor/chart.js/Chart.min.js") }}></script>
  <script src={{ asset("js/dash/demo/chart-area-demo.js") }}></script>
  <script src={{ asset("js/dash/demo/chart-pie-demo.js") }}></script>
  <script src={{ asset("js/dash/demo/datatables-demo.js") }}></script>






</footer>
</html>