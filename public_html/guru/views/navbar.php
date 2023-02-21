<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <div class="lds-ripple">
    <div class="lds-pos"></div>
    <div class="lds-pos"></div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin6">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="dashboard.html">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!-- Dark Logo icon -->
          <img src="../../vendor/plugins/images/logo-icon.png" alt="homepage" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          <!-- dark Logo text -->
          <img src="../../vendor/plugins/images/logo-text.png" alt="homepage" />
        </span>
      </a>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
      href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

      <!-- ============================================================== -->
      <!-- Right side toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav ms-auto d-flex align-items-center">

        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
        <li class=" in">
          <form role="search" class="app-search d-none d-md-block me-3">
            <input type="text" placeholder="Search..." class="form-control mt-0">
            <a href="" class="active">
              <i class="fa fa-search"></i>
            </a>
          </form>
        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <li>
          <a class="profile-pic" href="#">
            Selamat datang, <?= $myprofil->fname; ?>!</span></a>
          </li>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
  <!-- ============================================================== -->
