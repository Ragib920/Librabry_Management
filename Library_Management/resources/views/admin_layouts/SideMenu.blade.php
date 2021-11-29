<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
{{--        <a href="{{url('admin/dashboard')}}">--}}
{{--            <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />--}}
{{--        </a>--}}
        <a class="mt-4 mb-4" style="text-decoration: none;font-size:26px; color:#14BF98 " href="{{ '/dashboard' }}"><i class="fab fa-meetup"></i> LBS </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class=" @yield('dashboard_select') ">
                    <a href="{{url('provider/dashboard')}}">
                        <i class="fas fa-home"></i>Dashboard
                    </a>
                </li>

                <li class=" @yield('members_select') ">
                    <a href="{{url('admin/memners')}}">
                    <i class="fas fa-chevron-circle-right"></i>Members
                    </a>
                </li>
                <li class=" @yield('books_select') ">
                    <a href="{{url('admin/books')}}">
                    <i class="fas fa-chevron-circle-right"></i>Books
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
