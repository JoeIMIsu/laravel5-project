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

        <!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->

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
                                <li><a href="{{ URL::to('user') }}">Users</a>
                                </li>
                                </li>
                                <li class="active">Edit User</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <p class="caption">Users Management</p>

                <!--Form Advance-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            @if ($errors->has())
                                <div class="card-panel red lighten-3">
                                    <h6 class="white-text">
                                        <i class="mdi-action-account-circle prefix"></i>
                                        Please check the following field(s)
                                    </h6>
                                    <ou class="white-text">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ou>
                                </div>
                            @endif

                            <h4 class="header2">Edit User</h4>
                            <div class="row">
                                <form class="col s12" id="form" name="form" method="POST" action="{{ URL::to('/user/update/'.$data->id) }}">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="name" name="name" type="text" value="{{ old('name', $data->name) }}">
                                            <label for="name">First Name</label>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="lastname" name="lastname" type="text" value=""{{ old('lastname', $data->lastname) }}">
                                            <label for="lastname">Last Name</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-communication-email prefix"></i>
                                            <input id="email" name="email" type="email" value="{{ old('email', $data->email) }}"}>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-action-lock-outline prefix"></i>
                                            <input id="password" name="password" type="password" value="{{ old('password', $data->password) }}">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-today prefix"></i>
                                            <input type="date" id="birthday" name="birthday" class="datepicker" value="{{ old('birthday', $data->birthday) }}">
                                            <label for="dob">Birth Date</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <select id="profile" name="profile">
                                                <option value="" disabled selected>Choose your profile</option>
                                                <option value="Manager" {{ old('profile', $data->profile)?'selected="selected"':'' }}>Manager</option>
                                                <option value="Developer" {{ old('profile', $data->profile)?'selected="selected':'' }}>Developer</option>
                                                <option value="Business" {{ old('profile', $data->profile)?'selected="selected"':'' }}>Business</option>
                                            </select>
                                            <label>      Select Profile</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="file-field input-field col s6">
                                            <input class="file-path validate" type="text"/>
                                            <div class="btn">
                                                <span>Image</span>
                                                <input type="file" id="image" name="image" />
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <div class="switch">
                                                <i class="mdi-action-face-unlock prefix"></i>
                                                <label>
                                                    Female
                                                    <input type="checkbox" id="sex" name="sex">
                                                    <span class="lever"></span> Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="mdi-editor-mode-edit prefix"></i>
                                            <textarea id="message" name="message" class="materialize-textarea" length="5000"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="hidden" id="_token" name="_token" value="{{ Session::token() }}">
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