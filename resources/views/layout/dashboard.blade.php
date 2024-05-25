<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>SCM 1</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="stylesheet" href="{{asset ('style/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/style.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/css/responsive.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/css/colors.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/css/bootstrap-select.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/css/perfect-scrollbar.css')}}" />
      <link rel="stylesheet" href="{{asset ('style/css/custom.css')}}" />
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="/style/images/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Edwar Gea</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="" data-toggle="collapse" aria-expanded="false" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user purple_color"></i> <span>Data Pengguna</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{ ('peran') }}">> <span>Peran</span></a></li>
                           <li><a href="{{ ('pengguna') }}">> <span>Posisi</span></a></li>
                           <li><a href="{{ ('supir') }}">> <span>Supir</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder purple_color2"></i> <span>Data Barang</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="general_elements.html">> <span>Motor</span></a></li>
                           <li><a href="media_gallery.html">> <span>Kategori Motor</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-shopping-cart blue2_color"></i> <span>Data Pemesanan</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li><a href="general_elements.html">> <span>Pemesanan</span></a></li>
                           <li><a href="media_gallery.html">> <span>Outlet</span></a></li>
                        </ul>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-paper-plane-o red_color"></i> <span>Pengiriman</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Jadwal Pengiriman</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Pengiriman</span></a>
                           </li>
                           <li>
                              <a href="login.html">> <span>Rute</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>Truk</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="/style/images/user_img.jpg" alt="#" /><span class="name_user">Edwar Gea</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="login"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     @yield('content')
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2021 Designed by Edwar Arliman Gea.<br><br>
                           Distributed By: <a href="https://themewagon.com/">Edwar Gea</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset ('style/js/jquery.min.js')}}"></script>
      <script src="{{asset ('style/js/popper.min.js')}}"></script>
      <script src="{{asset ('style/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset ('style/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset ('style/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset ('style/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{asset ('style/js/Chart.min.js')}}"></script>
      <script src="{{asset ('style/js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset ('style/js/utils.js')}}"></script>
      <script src="{{asset ('style/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset ('js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset ('style/js/custom.js')}}"></script>
      <script src="{{asset ('style/js/chart_custom_style1.js')}}"></script>
   </body>
</html>