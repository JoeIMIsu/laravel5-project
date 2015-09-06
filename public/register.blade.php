@extends('layouts.frontends.default')

@section('content')
<section id="content">
    <!--start container-->
    <div class="container">
        <h5 class="breadcrumbs-title">Links Innovation Co., Ltd</h5>

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

                    <h4 class="header2">Registration</h4>
                    <div class="row">
                        <form class="col s12" id="form" name="form" method="POST" action="{{ URL::to('register/store') }}">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="mdi-editor-insert-emoticon prefix"></i>
                                    <input id="name" name="name" type="text" value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="email" name="email" type="text" value="{{ old('email') }}">
                                    <label for="name">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password" name="password" type="text">
                                    <label for="password">Password</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password_confirmation" name="password_confirmation" type="text">
                                    <label for="password_confirmation">Password Again</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop