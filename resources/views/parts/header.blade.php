	<nav>
		<div class="nav-up">
			<div class="container flex">
				<div class="nav-up-text flex">
					<span class="uppercase">dc power&#8480 visa&#174</span>
					<span class="uppercase">additional dc sites<i class="fas fa-caret-down"></i></span>
				</div>
			</div>
		</div>
		<div class="nav-down">
			<div class="container flex">
				<div class="logo">
					<img src="/img/dc-logo.png" alt="dc-logo">
				</div>
				<div class="nav-cmd">
					<ul class="flex">
						<li class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}"><a href="{{route('characters')}}">characters</a></li>
						<li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}"><a href="{{route('home')}}">comics</a></li>
						<li><a href="">movies</a></li>
						<li><a href="">tv</a></li>
						<li><a href="">games</a></li>
						<li><a href="">collectibles</a></li>
						<li><a href="">videos</a></li>
						<li><a href="">fans</a></li>
						<li><a href="">news</a></li>
						<li><a href="">shop</a><i class="fas fa-caret-down"></i></li>
					</ul>
				</div>
				<div class="search flex">
					<input type="text" placeholder="Search">
					<button><i class="fas fa-search"></i></button>
				</div>
			</div>
		</div>
	</nav>
	<section class="jumbo">
	</section>
