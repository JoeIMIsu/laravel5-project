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
                            <li><a href="{{ URL::to('/admin/post') }}">Posts</a>
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

                <h4 class="header2">Add New User</h4>
                <div class="row">
                  <form class="col s12" id="form" name="form" method="POST" action="{{ URL::to('admin/post/store') }}">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="mdi-content-content-paste prefix"></i>
                        <input id="title" name="title" type="text" value="{{ old('title') }}">
                        <label for="title">Title</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="mdi-communication-message prefix"></i>
                        <textarea id="short" name="short" class="materialize-textarea" length="300">{{ old('short') }}</textarea>
                        <label for="short">Short Description</label>
                      </div>

                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix"></i>
                            <textarea id="description" name="description" class="materialize-textarea">{{ old('description') }}</textarea>
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