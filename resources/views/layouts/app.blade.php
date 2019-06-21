<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Scripts -->
      <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
        <!-- Font Icons -->
        <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
        <!-- animate css -->
        <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet" />
        <!-- Waves-effect -->
        <link href="{{ asset('admin/css/waves-effect.css') }}" rel="stylesheet">
        <!-- Custom Files -->
        <link href="{{ asset('admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />
         {{-- For Font Awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        {{-- For Toastr Message Print Link --}}
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
        {{-- End --}}

        {{-- For DataTable Link --}}
        <style type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>
        {{-- End --}}

        {{-- For Sweetalert Link --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {{-- End --}}
 




</head>


<body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            @if (Auth::guest())



            @else




        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Inventory </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{URL::to('admin/images/img_1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="{{ route('pos') }}" class="waves-effect "><i class="md md-home"></i><span class="text-primary"><b> POS</b> </span></a>
                            </li>

                            <li>
                                <a href="{{route('check')}}" class="waves-effect active"><i class="md md-home"></i><span> Check </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Employees </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.employee')}}">Add Employee</a></li>
                                    <li><a href="{{route('all.employee')}}">All Employee</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Customers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.customer')}}">Add Customers</a></li>
                                    <li><a href="{{route('all.customer')}}">All Customers</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Suppliers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.supplier')}}">Add Suppliers</a></li>
                                    <li><a href="{{route('all.supplier')}}">All Suppliers</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Employee Salaries </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.advance_salary')}}">Add Advanced Salaries</a></li>
                                    <li><a href="{{route('all.advance_salary')}}">All Advanced Salaries</a></li>
                                    <li><a href="{{route('pay.salary')}}">Pay Salary</a></li>
                                    <li><a href="{{route('all.advance_salary')}}">Last Month Salary</a></li>
                                </ul>
                            </li> 

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.category')}}">Add Category</a></li>
                                    <li><a href="{{route('all.category')}}">All Category</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-user-tie"></i><span> Products </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add.product')}}">Add Product</a></li>
                                    <li><a href="{{route('all.product')}}">All Product</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Expense </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('add.expense') }}">Add New</a></li>
                                    <li><a href="{{ route('today.expense') }}">Today Expense</a></li>
                                    <li><a href="{{ route('monthly.expense') }}">Monthly Expense</a></li>
                                    <li><a href="{{ route('yearly.expense') }}">Yearly Expense</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Sales Report </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">First</a></li>
                                    <li><a href="#">Second</a></li>    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Attendence </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('take.attendence') }}">Take Attendence</a></li>
                                    <li><a href="{{ route('all.attendence') }}">All Attendences</a></li>
                                     <li><a href="#">Monthly Attendence</a></li>    
                                </ul>
                            </li>
                           <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Setting </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('setting') }}">Setting</a></li>
                                       
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->                
         @endif
         </div>


 @yield('content')



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/waves.js') }}"></script>
        <script src="{{ asset('admin/js/wow.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('admin/assets/chat/moment-2.2.1.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('admin/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>



        <!-- flot Chart -->
   {{--      <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.selection.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('public/admin/assets/flot-chart/jquery.flot.crosshair.js') }}"></script> --}}

        <!-- Counter-up -->
        <script src="{{ asset('admin/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{ asset('admin/js/jquery.app.js') }}"></script>

        <!-- Dashboard -->
        <script src="{{ asset('admin/js/jquery.dashboard.js') }}"></script>

        <!-- Chat -->
{{--         <script src="{{ asset('public/admin/js/jquery.chat.js') }}"></script> --}}

        <!-- Todo -->
        {{-- <script src="{{ asset('public/admin/js/jquery.todo.js') }}"></script> --}}
        <script src="{{ asset('admin/assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/datatables/dataTables.bootstrap.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    {{-- For Toastr Message Print Link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    {{-- For Sweetalert Message Alert Link..Ei link upor or nich j kono ek jaigay use korlei hobe...Ekhane nicher ta comment e rekhe uporerta use kora hoiche--}}
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> --}}
   {{-- End --}}

   {{-- For DataTable Link --}}
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    {{-- End --}}

    {{-- For Insert, Edit and Delete Message Print Code --}}
    <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script>
    {{-- End --}}

    {{-- Sweetalert Message print code --}}
    <script>
        $(document).on("click", "#delete", function(event) {
            event.preventDefault();
            var link = $(this).attr("href");
            swal({
                title: "Are you sure to delete?",
                text: "Once Deleted, This will be deleted Permanently!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if(willDelete) {
                    window.location.href = link;
                } 
                else {
                    swal("Safe Data!");
                }
            });
        });
    </script>
    {{-- End --}}
</body>
</html>
