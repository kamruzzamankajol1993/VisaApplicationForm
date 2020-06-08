 <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('/')}}public/admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="{{ Request::is('admin') ? 'active' : '' }}">
                        <a href="{{ route('admin.home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('user') ? 'active' : '' }}">
                        <a href="{{ route('user') }}">
                            <i class="material-icons">assignment</i>
                            <span>User List</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">view_list</i>
                            <span>Area List</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li class="{{ Request::is('state') ? 'active' : '' }}">
                                <a href="{{ route('state') }}" class=" waves-effect waves-block">State</a>
                            </li>
                            <li class="{{ Request::is('city') ? 'active' : '' }}">
                                <a href="{{ route('city') }}" class=" waves-effect waves-block">City</a>
                            </li>
                            <li class="{{ Request::is('district') ? 'active' : '' }}">
                                <a href="{{ route('district') }}" class=" waves-effect waves-block">District</a>
                            </li>
                            <li class="{{ Request::is('thana') ? 'active' : '' }}">
                                <a href="{{ route('thana') }}" class=" waves-effect waves-block">Thana</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">view_list</i>
                            <span>Job List</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li class="{{ Request::is('ljob') ? 'active' : '' }}">
                                <a href="{{ route('ljob') }}" class=" waves-effect waves-block">Labour Job</a>
                            </li>
                            <li class="{{ Request::is('ejob') ? 'active' : '' }}">
                                <a href="{{ route('ejob') }}" class=" waves-effect waves-block">Executive Job</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li class="{{ Request::is('vs') ? 'active' : '' }}">
                        <a href="{{ route('vs') }}">
                            <i class="material-icons">assignment</i>
                            <span>Visa Status</span>
                        </a>
                    </li>

                   
                      <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">people</i>
                            <span>Agent Section</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li class="{{ Request::is('admin/user') ? 'active' : '' }}">
                                <a href="{{ route('admin.user') }}" class=" waves-effect waves-block">Create Agent</a>
                            </li>
                            <li class="{{ Request::is('admin/agent/user') ? 'active' : '' }}">
                                <a href="{{ route('admin.agent.user') }}" class=" waves-effect waves-block">Applicant Added By Agent</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li class="{{ Request::is('admin/setting') ? 'active' : '' }}">
                        <a href="{{ route('admin.setting') }}">
                            <i class="material-icons">power_settings_new</i>
                            <span>Profile Setting</span>
                        </a>
                    </li>
                    <!--<li class="{{ Request::is('ad') ? 'active' : '' }}">
                        <a href="{{ route('ad') }}">
                            <i class="material-icons">assignment</i>
                            <span>Address</span>
                        </a>
                    </li>-->
                      <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020<a href="javascript:void(0);">Admin - Visa DuBai</a>.
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>