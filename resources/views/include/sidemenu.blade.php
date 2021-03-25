                <!--  Panel -->
                <div data-role="panel" data-display="overlay" id="sideMenu"> 
                    <div class="profile">
                        <!-- Right Side Of Navbar -->
                        <ul class="w3-center">
                            <!-- Authentication Links -->
                            <li><img src="images/icons/user.png" alt="Profile picture of user"></li>
                            <li class="w3-padding-bottom">
                                {{ ucwords(Auth::user()->name) }} <span class="caret"></span>
                            </li>
                        </ul>
                    </div>

                    <div class="w3-margin-top w3-margin-left panel-opts">
                        <ul class="w3-text-black">
                            <li><a href="/home"><i class="fa fa-home w3-margin-right"></i>Home</a></li>
                            <li><a href="/account"><i class="fa fa-user w3-margin-right"></i>My Account</a></li>          
                            <li><a href="/contact"><i class="fa fa-phone w3-margin-right"></i>Contact Us</a></li>
                            <li><a href="/about"><i class="fa fa-info-circle w3-margin-right"></i>About Us</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="w3-text-black">
                                <i class="fa fa-sign-out w3-margin-right"></i>{{ __('Logout')}}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div> <!-- End panel -->

                <!-- Header -->
                <div data-role="header">
                    <!--  Navigation -->
                    <div class="ui-navbar">
                        <!-- Side menu popup link -->
                        <a href="#sideMenu" data-rel="popup" data-iconpos="left" data-transition="slide" title="Menu"><i class="fa fa-bars"></i></a>

                    </div> <!-- End navigation -->
                </div> <!-- End header -->