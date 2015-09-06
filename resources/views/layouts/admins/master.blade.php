<!DOCTYPE html>
<html lang="en">
<head>

    <!-- ####################### HEADER BLOCK ####################### -->
    @include('layouts.admins.includes.header')
    <!-- ####################### HEADER BLOCK ####################### -->

</head>
<body>

<!-- ####################### LOADING BLOCK ####################### -->
@include('layouts.admins.includes.loading')
<!-- ####################### LOADING BLOCK ####################### -->


<!-- ####################### HEAD BLOCK ####################### -->
@include('layouts.admins.includes.head')
<!-- ####################### HEAD BLOCK ####################### -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- ####################### NAV BLOCK ####################### -->
        @include('layouts.admins.includes.nav')
        <!-- ####################### NAV BLOCK ####################### -->

        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->
        @yield('content')
        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- ####################### FOOTER BLOCK ####################### -->
@include('layouts.admins.includes.footer')
<!-- ####################### FOOTER BLOCK ####################### -->

</body>
</html>