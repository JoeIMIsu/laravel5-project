        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{{ URL::asset('images/guest.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <a class="btn-flat waves-effect waves-light white-text profile-btn" href="{{ URL::to('/home')  }}" data-activates="profile-dropdown">Guest</a>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home <span class="new badge"></span></a>
                </li>
                <li class="bold"><a href="{{ URL::to('register') }}" class="waves-effect waves-cyan"><i class="mdi-social-person-add"></i>Register</span></a>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                <li class="bold"><a href="{{ URL::to('/auth/login') }}" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i>Login</span></a>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->