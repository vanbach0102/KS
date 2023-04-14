<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-invoice-list.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">

    <!-- END: Custom CSS-->
  </head>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="Gpu2mayL"></script>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      <div class="navbar-container d-flex content">
        <ul class="nav navbar-nav align-items-center ms-auto">
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link nav-link-style">
              <i class="ficon" data-feather="moon"></i>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name fw-bolder">
                    @php
                    $name = Auth::user()->admin_name;
                    if($name){
                       echo $name;
                    }
                   @endphp
                </span>
                {{-- <span class="user-status">Admin</span> --}}
              </div>
              <span class="avatar">
                <img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                <span class="avatar-status-online"></span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
              <a class="dropdown-item" href="page-profile.html">
                <i class="me-50" data-feather="user"></i> Profile </a>
              <a class="dropdown-item" href="/logout-auth">
                <i class="me-50" data-feather="power"></i> Logout </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item me-auto">
            <a class="navbar-brand" href="/dashboard">
              <span class="brand-logo">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                  <defs>
                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                      <g id="Group" transform="translate(400.000000, 178.000000)">
                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <h2 class="brand-text">ADMIN</h2>
            </a>
          </li>
          <li class="nav-item nav-toggle">
            <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
              <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
              <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item">
            <a class="d-flex align-items-center" href="/dashboard">
              <i data-feather="home"></i>
              <span class="menu-title text-truncate" data-i18n="Dashboards">Danh mục</span>
            </a>
            <ul class="menu-content">
              <li>
                <a class="d-flex align-items-center" href="/add-loai-phong">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate">Quản lý loại phòng</span>
                </a>
              </li>
              <li>
                <a class="d-flex align-items-center" href="/add-phong">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate">Quản lý phòng</span>
                </a>
              </li>
              <li>
                <a class="d-flex align-items-center" href="/add-cate-news">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate">Danh mục bài viết</span>
                </a>
              </li>
              <li>
                <a class="d-flex align-items-center" href="/add-news">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate">Bài viết</span>
                </a>
              </li>
            </ul>
          </li>
          <li class=" nav-item">
            <a class="d-flex align-items-center" href="index.html">
              <i data-feather="home"></i>
              <span class="menu-title text-truncate" data-i18n="Dashboards">User</span>
            </a>
            <ul class="menu-content">
              <li>

                <a class="d-flex align-items-center" href="/all-user">
                    <i data-feather="circle"></i>
                    <span class="menu-item text-truncate" >User</span>
                  </a>
              </li>
            </ul>

          </li>

          <li class=" nav-item">
            <a class="d-flex align-items-center" href="index.html">
              <i data-feather="home"></i>
              <span class="menu-title text-truncate" data-i18n="Dashboards">Danh sách</span>
            </a>
            <ul class="menu-content">
              <li>
                <a class="d-flex align-items-center" href="/all-loai-phong">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate">Loại phòng</span>
                </a>
              <li>
                <a class="d-flex align-items-center" href="/all-phong">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate" >Phòng</span>
                </a>
              </li>
              <li>
                <a class="d-flex align-items-center" href="/all-cate-news">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate" >Danh sách danh mục bài viết</span>
                </a>
              </li>
              <li>
                <a class="d-flex align-items-center" href="/all-news">
                  <i data-feather="circle"></i>
                  <span class="menu-item text-truncate" >Bài viết</span>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content " id="main-content">
        <section class="wrapper">
            @yield('admin_content')
        </section>
      <!-- END: Content-->
      <!-- BEGIN: Customizer-->
      <div class="customizer d-none d-md-block">
        <a class="customizer-toggle d-flex align-items-center justify-content-center" href="#">
          <i class="spinner" data-feather="settings"></i>
        </a>
        <div class="customizer-content">
          <!-- Customizer header -->
          <div class="customizer-header px-2 pt-1 pb-0 position-relative">
            <h4 class="mb-0">Theme Customizer</h4>
            <p class="m-0">Customize & Preview in Real Time</p>
            <a class="customizer-close" href="#">
              <i data-feather="x"></i>
            </a>
          </div>
          <hr />
          <!-- Styling & Text Direction -->
          <div class="customizer-styling-direction px-2">
            <p class="fw-bold">Skin</p>
            <div class="d-flex">
              <div class="form-check me-1">
                <input type="radio" id="skinlight" name="skinradio" class="form-check-input layout-name" checked data-layout="" />
                <label class="form-check-label" for="skinlight">Light</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="skinbordered" name="skinradio" class="form-check-input layout-name" data-layout="bordered-layout" />
                <label class="form-check-label" for="skinbordered">Bordered</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="skindark" name="skinradio" class="form-check-input layout-name" data-layout="dark-layout" />
                <label class="form-check-label" for="skindark">Dark</label>
              </div>
              <div class="form-check">
                <input type="radio" id="skinsemidark" name="skinradio" class="form-check-input layout-name" data-layout="semi-dark-layout" />
                <label class="form-check-label" for="skinsemidark">Semi Dark</label>
              </div>
            </div>
          </div>
          <hr />
          <!-- Menu -->
          <div class="customizer-menu px-2">
            <div id="customizer-menu-collapsible" class="d-flex">
              <p class="fw-bold me-auto m-0">Menu Collapsed</p>
              <div class="form-check form-check-primary form-switch">
                <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
                <label class="form-check-label" for="collapse-sidebar-switch"></label>
              </div>
            </div>
          </div>
          <hr />
          <!-- Layout Width -->
          <div class="customizer-footer px-2">
            <p class="fw-bold">Layout Width</p>
            <div class="d-flex">
              <div class="form-check me-1">
                <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
                <label class="form-check-label" for="layout-width-full">Full Width</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
              </div>
            </div>
          </div>
          <hr />
          <!-- Navbar -->
          <div class="customizer-navbar px-2">
            <div id="customizer-navbar-colors">
              <p class="fw-bold">Navbar Color</p>
              <ul class="list-inline unstyled-list">
                <li class="color-box bg-white border selected" data-navbar-default=""></li>
                <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
                <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
              </ul>
            </div>
            <p class="navbar-type-text fw-bold">Navbar Type</p>
            <div class="d-flex">
              <div class="form-check me-1">
                <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
                <label class="form-check-label" for="nav-type-floating">Floating</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
                <label class="form-check-label" for="nav-type-sticky">Sticky</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
                <label class="form-check-label" for="nav-type-static">Static</label>
              </div>
              <div class="form-check">
                <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
                <label class="form-check-label" for="nav-type-hidden">Hidden</label>
              </div>
            </div>
          </div>
          <hr />
          <!-- Footer -->
          <div class="customizer-footer px-2">
            <p class="fw-bold">Footer Type</p>
            <div class="d-flex">
              <div class="form-check me-1">
                <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
                <label class="form-check-label" for="footer-type-sticky">Sticky</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
                <label class="form-check-label" for="footer-type-static">Static</label>
              </div>
              <div class="form-check me-1">
                <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
                <label class="form-check-label" for="footer-type-hidden">Hidden</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Customizer-->
      <!-- BEGIN: Footer-->
      <!-- END: Footer-->
      <!-- BEGIN: Vendor JS-->
      <script src="/app-assets/vendors/js/vendors.min.js"></script>
      <!-- BEGIN Vendor JS-->
      <!-- BEGIN: Page Vendor JS-->
      <script src="/app-assets/vendors/js/charts/apexcharts.min.js"></script>
      <script src="/app-assets/vendors/js/extensions/toastr.min.js"></script>
      <script src="/app-assets/vendors/js/extensions/moment.min.js"></script>
      <script src="/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
      <script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
      <script src="/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
      <script src="/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
      <script src="/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>


      <!-- END: Page Vendor JS-->
      <!-- BEGIN: Theme JS-->
      <script src="/app-assets/js/core/app-menu.min.js"></script>
      <script src="/app-assets/js/core/app.min.js"></script>
      <script src="/app-assets/js/scripts/customizer.min.js"></script>
      <!-- END: Theme JS-->
      <!-- BEGIN: Page JS-->
      <script src="/app-assets/js/scripts/pages/app-invoice-list.min.js"></script>
      <script src="/ckeditor/ckeditor.js"></script>
      <!-- END: Page JS-->
      <script>
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
        CKEDITOR.replace('id4');
      </script>
      <script>
        $(window).on('load', function() {
          if (feather) {
            feather.replace({
              width: 14,
              height: 14
            });
          }
        })
      </script>
       <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script>
       $(document).ready( function () {
        $('#myTable').DataTable();
    } );</script>

  </body>
  <!-- END: Body-->
</html>


