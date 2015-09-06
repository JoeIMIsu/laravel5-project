<!DOCTYPE html>
<html lang="en">
<head>

    <!-- ####################### HEADER BLOCK ####################### -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Links Innovation Co., Ltd Demo a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="Links Innovation, Java Framework Training, PHP Framework Training, DevOps Training, responsive admin template,">
    <title>Links Innovation Laravel 5.1 Demo - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ URL::asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ URL::asset('images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->

    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ URL::asset('css/custom-style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ URL::asset('css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- ####################### HEADER BLOCK ####################### -->

</head>
<body>

<!-- ####################### LOADING BLOCK ####################### -->
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->
<!-- ####################### LOADING BLOCK ####################### -->


<!-- ####################### HEAD BLOCK ####################### -->
<!-- START HEAD -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">

                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="#" class="brand-logo darken-1"><img src="{{ URL::asset('images/materialize-logo.png') }}" alt="materialize logo"></a> <span class="logo-text">Links Innovation</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                    </li>
                    <li><a href="#" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEAD -->
<!-- ####################### HEAD BLOCK ####################### -->


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- ####################### NAV BLOCK ####################### -->
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{{ URL::asset('images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard <span class="new badge"></span></a>
                </li>
                <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-social-people"></i> Users</a>
                <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i> Post</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href=#">Gallery Page</a>
                                    </li>
                                    <li><a href=#">Image Hover Effects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                </li>
                <li><a href="#"><i class="mdi-action-input"></i> Logout</a>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- ####################### NAV BLOCK ####################### -->

        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->
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
                                <li><a href="#">Posts</a>
                                </li>
                                </li>
                                <li class="active">Add New Post</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <p class="caption">Posts Management</p>

                <!--Form Advance-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">

                                <!--<div class="card-panel red lighten-3">
                                    <h6 class="white-text">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        Please check the following field(s)
                                    </h6>
                                    <ou class="white-text">
                                        <li>error 1</li>
                                    </ou>
                                </div>-->

                            <h4 class="header2">Add New Post</h4>
                            <div class="row">
                                <form class="col s12" id="form" name="form" method="POST" action="#">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-content-content-paste prefix"></i>
                                            <input id="title" name="title" type="text" value="">
                                            <label for="title">Title</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-communication-message prefix"></i>
                                            <textarea id="short" name="short" class="materialize-textarea" length="300"></textarea>
                                            <label for="short">Short Description</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <i class="mdi-editor-mode-edit prefix"></i>
                                            <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="hidden" id="_token" name="_token" value="">
                                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- ####################### FOOTER BLOCK ####################### -->
<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="https://www.facebook.com/linksinno" target="_blank">Links Innovation Co., Ltd</a> All rights reserved.</span>
            <span class="right"> Developed by <a class="grey-text text-lighten-4" href="https://www.facebook.com/linksinno">Links Innovation</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ URL::asset('js/materialize.js') }}"></script>
<!--prism-->
<script type="text/javascript" src="{{ URL::asset('js/prism.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ URL::asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<!-- chartist -->
<script type="text/javascript" src="{{ URL::asset('js/plugins/chartist-js/chartist.min.js') }}"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
<!-- ####################### FOOTER BLOCK ####################### -->

</body>
</html>