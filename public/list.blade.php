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
            <!--<div class="card-panel red lighten-3">
                <i class="mdi-navigation-close prefix"></i>
                <span class="white-text text-darken-2">Error Flash Messages</span>
            </div>-->


            <!--<div class="card-panel teal lighten-3">
                <i class="mdi-navigation-check prefix"></i>
                <span class="white-text text-darken-2">Success Flash Messages</span>
            </div>-->

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
                            <tr>
                                <td>Title</td>
                                <td>Slug</td>
                                <td>Enable</td>
                                <td>
                                    06-08-2015 / 06-08-2015
                                </td>
                                <td>
                                    <a href="#">
                                        <i class="mdi-action-pageview"></i>
                                    </a>
                                    <a href="#">
                                        <i class="mdi-content-create"></i>
                                    </a>
                                    <a href="#modaldelete-1" class="modal-trigger">
                                        <i class="mdi-action-delete"></i>
                                    </a>
                                    <!-- Modal Confirmation Yes/No -->
                                    <div id="modaldelete-1" class="modal">
                                        <div class="modal-content red lighten-3 white-text">
                                            <p>Do you want to delete this item.
                                        </div>
                                        <div class="modal-footer red">
                                            <a href="#"  class="waves-effect waves-green btn-flat white-text modal-action modal-close">Yes</a>
                                            <a href="#" class="waves-effect waves-red btn-flat white-text modal-action modal-close">No</a>
                                        </div>
                                    </div>
                                    <!-- Modal Confirmation Yes/No -->
                                </td>
                            </tr>
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
            <a class="btn-floating btn-large red" href="#">
                <i class="large mdi-editor-mode-edit"></i>
            </a>
        </div>
        <!-- Floating Action Button -->
    </div>
    <!--end container-->

</section>
<!-- //////////////////////////////////// MAIN CONTENT //////////////////////////////////////// -->