@extends('layouts.admins.master')

@section('content')

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
                        <li class="active">Dashboard</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div class="section">

            @if ( Session::has('error') )
            <div class="card-panel red lighten-3">
                <i class="mdi-navigation-close prefix"></i>
                <span class="white-text text-darken-2">{{ Session::get('error') }}</span>
            </div>
            @endif

            @if ( Session::has('success') )
            <div class="card-panel teal lighten-3">
                <i class="mdi-navigation-check prefix"></i>
                <span class="white-text text-darken-2">{{ Session::get('success') }}</span>
            </div>
            @endif

            <div id="responsive-table">
                <h4 class="header">Posts Dashboard</h4>
                <div class="row">
                    <div class="col s12 m12 l12 ">
                        <table class="responsive-table striped">
                            <thead>
                            <tr>
                                <th data-field="name">Title</th>
                                <th data-field="profile">Status</th>
                                <th data-field="created_at">Created/Updated</th>
                                <th data-field="status">Status</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if( $data->count() > 0 )
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->status?'Enable':'Disable' }}</td>
                                    <td>
                                        {{ date('d-M-Y', $item->created_at->getTimestamp() ) }} /
                                        {{ date('d-M-Y', $item->updated_at->getTimestamp() ) }}
                                    </td>
                                    <td>
                                        <a href="{{ URL::to('admin/post/view/'.$item->id) }}">
                                            <i class="mdi-action-pageview"></i>
                                        </a>
                                        <a href="{{ URL::to('admin/post/edit/'.$item->id) }}">
                                            <i class="mdi-content-create"></i>
                                        </a>
                                        <a href="#modaldelete-{{ $item->id  }}" class="modal-trigger">
                                            <i class="mdi-action-delete"></i>
                                        </a>
                                        <!-- Modal Confirmation Yes/No -->
                                        <div id="modaldelete-{{ $item->id }}" class="modal">
                                            <div class="modal-content red lighten-3 white-text">
                                                <p>Do you want to delete this item.
                                            </div>
                                            <div class="modal-footer red">
                                                <a href="{{ URL::to('admin/post/delete/'.$item->id) }}"  class="waves-effect waves-green btn-flat white-text modal-action modal-close">Yes</a>
                                                <a href="#" class="waves-effect waves-red btn-flat white-text modal-action modal-close">No</a>
                                            </div>
                                        </div>
                                        <!-- Modal Confirmation Yes/No -->
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--- Pagination Here. -->
            <br />
        </div>


        <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red" href="{{ URL::to('admin/post/create') }}">
                <i class="large mdi-editor-mode-edit"></i>
            </a>
        </div>
        <!-- Floating Action Button -->
    </div>
    <!--end container-->

</section>
<!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->
@stop