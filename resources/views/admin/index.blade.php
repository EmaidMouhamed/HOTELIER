<!DOCTYPE html>
<html lang="en">
    
@include('admin.pages.head')

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- sidebar menu -->
                    @include('admin.pages.sidebar')
                    <!-- /sidebar menu -->


                    <!-- /menu footer buttons -->
                    @include('admin.pages.footer-buttons')
                    <!-- /menu footer buttons -->


                </div>
            </div>

            <!-- top navigation -->
            @include('admin.pages.navigation')
            <!-- /top navigation -->


            <!-- page content -->
            @yield('content')
            <!-- /page content -->


            <!-- footer content -->
            @include('admin.pages.footer')
            <!-- /footer content -->
        </div>
    </div>


    @include('admin.pages.js')

</body>

</html>
