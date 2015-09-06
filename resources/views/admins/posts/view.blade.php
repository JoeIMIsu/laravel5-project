<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ####################### HEADER BLOCK ####################### -->
    @include('layouts.includes.header')
            <!-- ####################### HEADER BLOCK ####################### -->
</head>
<body>
<!-- ####################### LOADING BLOCK ####################### -->
@include('layouts.includes.loading')
        <!-- ####################### LOADING BLOCK ####################### -->

<!-- ####################### HEAD BLOCK ####################### -->
@include('layouts.includes.head')
        <!-- ####################### HEAD BLOCK ####################### -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- ####################### NAV BLOCK ####################### -->
        @include('layouts.includes.nav')
                <!-- ####################### NAV BLOCK ####################### -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Links Innovation Co., Ltd</h5>
                            <ol class="breadcrumb">
                                <li><a href="{{ URL::to('admin/post') }}">Posts</a>
                                </li>
                                </li>
                                <li class="active">Post Information</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">
                    <div id="responsive-table">
                        <h4 class="header">Post Information</h4>
                        <div class="row">
                            <div class="col s12 m12 l12 ">
                                <ul id="profile-page-about-feed" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="mdi-content-content-paste circle light-green"></i>
                                        <span class="title">Title</span>
                                        <p>{{ $data->name.' '.$data->title }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-language circle orange"></i>
                                        <span class="slug">Slug</span>
                                        <p>{{ $data->slug }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-action-language"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-communication-message circle blue lighten-1"></i>
                                        <span class="short">Short Description</span>
                                        <p>{{ $data->short }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-communication-message"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-settings circle teal lighten-1"></i>
                                        <span class="title">Status</span>
                                        <p>{{ $data->status?'Disable':'Enable' }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-action-settings"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-today circle pink lighten-2"></i>
                                        <span class="title">Created</span>
                                        <p>{{ date('d-M-Y', strtotime($data->created_at)) }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-action-today"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-today circle pink lighten-2"></i>
                                        <span class="title">Updated</span>
                                        <p>{{ date('d-M-Y', strtotime($data->updated_at)) }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-action-today"></i></a>
                                    </li>
                                    <li class="collection-item avatar">
                                        <i class="mdi-editor-mode-edit circle lime darken-3"></i>
                                        <span class="description">Description</span>
                                        <p>{{ $data->description }}</p>
                                        <a href="#!" class="secondary-content"><i class="mdi-editor-mode-edit"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTENT -->

        <!-- ####################### RIGHT BAR BLOCK ####################### -->
        @include('layouts.includes.rightbar')
                <!-- ####################### RIGHT BAR BLOCK ####################### -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- ####################### FOOTER BLOCK ####################### -->
@include('layouts.includes.footer')
        <!-- ####################### FOOTER BLOCK ####################### -->

</body>

</html>