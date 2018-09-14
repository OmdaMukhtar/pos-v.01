<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>منصة الباحثون</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('sb-admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('sb-admin/css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('sb-admin/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/front-end.css') }}">

    <style>
        body {
            font-family: 'Amiri','serif';
            font-size: 16px;
        }

        a:hover {
            text-decoration: none;
        }

        @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
    </style>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default  brand navbar-static-top r-primary-style" role="navigation" style="
    margin-bottom: 0; color: white;background-color: #23282e;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{-- <a class="navbar-brand " href="#" style="color: #000"> تطبيق المبيعات</a> --}}
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-left">

            <li class="dropdown">
                <a href="{{ url('/') }}">
                    <i class="fa fa-home fa-fw r-secondary"></i>
                </a>
            </li>

        </ul>
        <!-- /.navbar-top-links -->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">تطبيق المبيعات</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> لوحة التحكم
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> شاشة بياتات مورد <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs & Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> شاشة الاصناف <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>New Service 1</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>New New 1</li>
                  <li>New New 2</li>
                  <li>New New 3</li>
                </ul>


                 <li>
                  <a href="#">
                    <i class="fa fa-user fa-lg"></i> شاشة بيانات عميل
                  </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-user fa-lg"></i> فاتورة مبيعات عميل
                    </a>
                    </li>

                    <li>
                        <a href="#">
                          <i class="fa fa-user fa-lg"></i> التوريد الي المخزن
                        </a>
                        </li>
      
                  <li>
                  <a href="#">
                    <i class="fa fa-users fa-lg"></i> كشف تفصيلي للمورد
                  </a>
                </li>

                <li>
                    <a href="#">
                      <i class="fa fa-users fa-lg"></i> إتلاف الموارد
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-users fa-lg"></i> إسترجاع فاتورة عميل
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-users fa-lg"></i> سندات الدفع المالي
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-users fa-lg"></i> كشف تفصيلي للعميل
                    </a>
                  </li>
            </ul>
     </div>
</div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        {{-- @include('flash::message') --}}

        <div class="row" style="padding-top: 30px;">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
            </div>
        </div>
    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="{{ asset('sb-admin/js/jquery-1.11.0.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('sb-admin/js/bootstrap.min.js') }}"></script>


<script>
    $(document.body).on('hidden.bs.modal', function () {
        $('#myModal').removeData('bs.modal')
    });
</script>
</body>

</html>

<style>
    .nav-side-menu {
  overflow: auto;
  /* font-family: verdana; */
  font-size: 16px;
  font-weight: 400;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 250px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 52px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.arrow {
    float: left;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: left;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 35px;
  width: 20px;
  padding-right: 10px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

</style>