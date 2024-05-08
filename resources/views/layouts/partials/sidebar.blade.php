<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
    {{ __('Master Data') }}
            </div>

@role('admin')
            <!-- Nav Item - Profile -->
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('user.index')  }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>{{ __('Master User') }}</span>
                </a>
            </li>
@endrole

            <!-- Nav Item - About -->
            <li class="nav-item ">
                <a class="nav-link">
                    <i class="fas fa-fw fa-hands-helping"></i>
                    <span>{{ __('About') }}</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
