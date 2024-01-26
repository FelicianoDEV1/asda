<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <span class="logo-mini">
            <img id="ics" src="/images/ics.png" alt="ICS">
        </span>
        <span class="logo-lg">
            <img id="darkLogo" src="/images/icsnav-dark.png" alt="Dark Logo">
            <img id="lightLogo" src="/images/icsnav-light.png" alt="Light Logo">
        </span>

    </a>


    <script>
    // Function to switch between dark and light logos for mobile devices
    function switchMobileLogo() {
        var darkLogo = document.getElementById('darkLogo');
        var lightLogo = document.getElementById('lightLogo');

        // Check if the viewport width is less than or equal to a certain value (e.g., 767 for typical mobile devices)
        if (window.innerWidth <= 767) {
            // If on a mobile device, show dark logo and hide light logo
            darkLogo.style.display = 'inline-block';
            lightLogo.style.display = 'none';
        } else {
            // If on a PC, show light logo and hide dark logo
            darkLogo.style.display = 'none';
            lightLogo.style.display = 'inline-block';
        }
    }

    // Call the switchMobileLogo function initially
    switchMobileLogo();

    // You may need to call switchMobileLogo whenever the viewport is resized
    window.addEventListener('resize', switchMobileLogo);
    </script>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/images/defaultp.jpg" class="user-image" alt="User Image" />
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/images/defaultp.jpg" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }}
                                <small>{{ trans('adminlte_lang::message.login') }} </small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!--                           <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <!--                                    <a href="{{ url('/settings') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>-->
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ trans('adminlte_lang::message.signout') }}
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                    <input type="submit" value="logout" style="display: none;">
                                </form>

                            </div>
                        </li>
                    </ul>
                </li>
                @endif

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <!--                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
                </li>
            </ul>
        </div>
    </nav>
</header>