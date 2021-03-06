<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cambo Golf Site | Admin</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home-admin.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}} ">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



</head>
@auth

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('#')}}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cambo Golf</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            @if (stripos($_SERVER['REQUEST_URI'],'slide'))
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link" href="{{url('/slide')}}">
                    <i class="fas fa-list-ul"></i>
                    <span>Slide Control</span></a>
            </li>
                
            @if (stripos($_SERVER['REQUEST_URI'],'reservation/pending'))
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link" href="{{url('reservation/pending')}}">
                <i class="fa fa-spinner"></i>
                    <span>Pending Reservation</span></a>
            </li>  

            @if (stripos($_SERVER['REQUEST_URI'],'reservation/accepted'))
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link" href="{{url('reservation/accepted')}}">
                <i class="fa fa-cloud"></i>
                    <span>Reservation</span></a>
            </li>  
            <!-- Nav Item - Pages Collapse Menu -->
            @if (stripos($_SERVER['REQUEST_URI'],'customer'))
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Customer</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('customerhomectr')}}">On home page</a>
                        <a class="collapse-item" href="{{url('customerctr')}}">Main page</a>
                    </div>
                </div>
            </li>

            @if (stripos($_SERVER['REQUEST_URI'],'about'))
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link collapsed" href="{{url('about')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>About page</span>
                </a>
            </li>
            @if (stripos($_SERVER['REQUEST_URI'],'featurectr'))
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link collapsed" href="{{url('featurectr')}}">
                    <i class="fas fa-fw fa-gavel"></i>
                    <span>Feature page</span>
                </a>
            </li>
            @if (stripos($_SERVER['REQUEST_URI'],'career'))
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link collapsed" href="{{url('/career')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Career Opportunity</span>
                </a>
            </li>



            @if (stripos($_SERVER['REQUEST_URI'],'cat'))
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active" id="navbarDropdownBlog">
                @else
            <li class="nav-item" id="navbarDropdownBlog">
                @endif
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Media</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('categoryctr')}}">Images</a>
                        <a class="collapse-item" href="{{url('catvideoctr')}}">Videos</a>
                    </div>
                </div>
            </li>

            @if (stripos($_SERVER['REQUEST_URI'],'golf-s'))
            <li class="nav-item active">
                @elseif (stripos($_SERVER['REQUEST_URI'],'servicectr'))
            <li class="nav-item active">
                @elseif (stripos($_SERVER['REQUEST_URI'],'short'))
            <li class="nav-item active">
                @else
            <li class="nav-item">
                @endif
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Service</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/services/index')}}">Service</a>
                        <a class="collapse-item" href="{{url('/services_category/index')}}">Service Category</a>
                        <a class="collapse-item" href="{{url('/services_contact/index')}}">Service Contact</a>

                    </div>
                </div>

            </li>

            @if (stripos($_SERVER['REQUEST_URI'],'users'))
            <!-- Nav Item - User -->
            <li class="nav-item active">
                @else
                <!-- Nav Item - User -->
            <li class="nav-item">
                @endif
                <a class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>User Management</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav  ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('storage/images/'.Auth::user()->avatar)}}">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/profile')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container">
                    @yield('admin')
                </div>



            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer ml-auto">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                        <button class="btn btn-danger"> {{ __('Logout') }}</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->



    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('js/dataTables.colReorder.min.js')}} "></script>
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}} "></script>
    <script src="{{asset('vendor/ckeditor/ckeditor-responsive-images.js')}} "></script>

    {{-- <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script> --}}


    <script>
        $(document).ready(function () {
            $('#userlist').DataTable({
                colReorder: true
            });
            $('#example').DataTable({
                colReorder: true
            });
        });
    CKEDITOR.replace( 'ck-input' );
    </script>

</body>
@endauth
@guest

<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card">
            <img style="height:550px;" src="{{asset('img/permission.jpg')}}">
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>

@endguest

</html>
