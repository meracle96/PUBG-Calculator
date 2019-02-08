<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('front/assets/images/shooter/logo.png') }}" alt="">
                </a>
            
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
                <ul class="nav navbar-nav">
                    
        <li>
            <a href="/">
                Home
                
                
                <span class="label">Information</span>
            </a>
        </li>
        <li>
            <a href="/add-tournament">
                Add Tournament
                
                
                <span class="label">Tournament</span>
            </a>
        </li>
        <li>
            <a href="/tournament">
                Manage Tournament
                
                
                <span class="label">Tournament</span>
            </a>
        </li>
                </ul>
            

            
            <ul class="nav navbar-nav navbar-right">
                

                    @guest
                    <li>
                        <a href="/login">
                            Login
                            
                            
                            <span class="label">User</span>
                        </a>
                    </li>

                    <li>
                        <a href="/register">
                            Register
                            
                            
                            <span class="label">User</span>
                        </a>
                    </li>
                    @endguest

                    @auth
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            Logout
                            
                            
                            <span class="label">{{ Auth::user()->name }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endauth
                
            </ul>
            
        </div>
    </div>
</nav>