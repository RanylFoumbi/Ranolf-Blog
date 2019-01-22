
<header>

		<div class="container">
			<a class="logo" href="index.html"><img src="{{ asset('frontend/images/logo-black.png')}}" alt="Logo"></a>
			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li><a href="{{route('User-cathegoryList')}}">NEWS</a></li>
				<li><a class="pl-0 pl-sm-10" href="#">About</a></li>
				<li><a href="{{route('contact-us.index')}}">Contact</a></li>
				<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				<li>
                    @if (Route::has('register'))
                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>           
                    @endif
                </li>                        			
                                
							
			</ul>
			<div class="clearfix"></div>
		</div><!-- container -->
	</header>