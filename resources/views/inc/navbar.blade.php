<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="/">Upcoming Events</a></li>
                    <li><a href="/contact_us">Contact Us</a></li> 
                @else
                    @if (Auth::user()->category==1)
                    <li><a href="/home">Dashboard</a></li>
                    <li><a href="/event_approval">Pending Approvals</a></li>
                    <li><a href="/request_approval">Pending Requests</a></li>
                    <li><a href="/">Upcoming Events</a></li>  
                    @endif
                    @if (Auth::user()->category==2)
                        <li><a href="/home">My Events</a></li>
                        <li><a href="/add_event">Host Event</a></li>
                        <li><a href="/">Upcoming Events</a></li>
                        <li><a href="/contact_us">Contact Us</a></li> 
                    @endif
                    @if (Auth::user()->category==3)
                        <li><a href="/home">My Requests</a></li>
                        <li><a href="/add_preferences">Add Request</a></li>
                        <li><a href="/">Upcoming Events</a></li>
                        <li><a href="/contact_us">Contact Us</a></li>  
                    @endif
                @endif 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>