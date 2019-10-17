<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <h3 class="text-light text-center col-md-10">MONEY TRACKER</h3>
    <ul class="navbar-nav col-md-2">
        <!--li class="nav-item">
            <a class="nav-link text-info" href="{{ route('login') }}">登录</a>
        </li-->
		@if(Auth::check())
			<li class="nav-item">
				<a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
			</li>
		@endif	
    </ul>
</nav>