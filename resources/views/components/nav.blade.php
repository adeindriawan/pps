<div>
    <!-- Well begun is half done. - Aristotle -->
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-80 img-radius" src="{{ asset('backview/assets/images/avatar-4.jpg') }}" alt="User-Profile-Image">
                    <div class="user-details">
                        <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="main-menu-content">
                    <ul>
                        <li class="more-details">
                            <a href="user-profile.html"><i class="ti-user"></i>{{ $role }}</a>
                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                            <a href="{{ route('logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                @if(request()->segment(count(request()->segments())) == 'dashboard')
                    <li class="active">
                @else
                    <li>
                @endif
                    <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                @foreach($menus as $menu)
                    @if(in_array(request()->segment(count(request()->segments())), $menu['slugs']))
                        @php
                            $isActive = 'active';
                        @endphp
                    @else
                        @php
                            $isActive = '';
                        @endphp
                    @endif
                    @if(count($menu['submenu']) > 0)
                        @php
                            $hasSubmenu = 'pcoded-hasmenu';
                        @endphp
                    @else
                        @php
                            $hasSubmenu = '';
                        @endphp
                    @endif
                    <li class="{{ $hasSubmenu }} {{ $isActive }}">
                        @if(count($menu['submenu']) > 0)
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                        @else
                            <a href="{{ route($menu['route']) }}" class="waves-effect waves-dark">
                        @endif
                            <span class="pcoded-micon"><i class="ti-{{ $menu['icon'] }}"></i><b>D</b></span>
                            <span class="pcoded-mtext">{{ $menu['name'] }}</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        @if(count($menu['submenu']) > 0)
                            <ul class="pcoded-submenu">
                            @foreach($menu['submenu'] as $submenu)
                                <li class=" ">
                                    <a href="{{ route($submenu['route']) }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">{{ $submenu['name'] }}</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>