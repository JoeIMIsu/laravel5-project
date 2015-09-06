<!DOCTYPE html>
<html lang="en">
<head>

    <!-- ####################### HEADER BLOCK ####################### -->
    @include('layouts.frontends.includes.header')
    <!-- ####################### HEADER BLOCK ####################### -->

</head>
<body>

<!-- ####################### LOADING BLOCK ####################### -->
@include('layouts.frontends.includes.loading')
<!-- ####################### LOADING BLOCK ####################### -->


<!-- ####################### HEAD BLOCK ####################### -->
@include('layouts.frontends.includes.head')
<!-- ####################### HEAD BLOCK ####################### -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- ####################### NAV BLOCK ####################### -->
        @include('layouts.frontends.includes.nav')
        <!-- ####################### NAV BLOCK ####################### -->

        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->
        @yield('content')
        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- ####################### FOOTER BLOCK ####################### -->
@include('layouts.frontends.includes.footer')
<!-- ####################### FOOTER BLOCK ####################### -->

</body>
</html>