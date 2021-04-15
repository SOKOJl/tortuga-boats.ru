<header>
	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="wave-main-menu"></div>
		<div class="container">
			<div class="row width100">
				<div class="col-3 col-lg-1">
					<button class="navbar-toggler menu_button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      		<!-- <span class="navbar-toggler-icon"></span> -->
			    		Меню
			    	</button>
				</div>
				
		  	
	    	
		  	<div class="collapse col-lg-8 navbar-collapse justify-content-center" id="navbarNav">
		  			<ul class="navbar-nav">
		  			<li class="nav-item active">
		  				<a href="<? print(Url('main')) ?>" class="nav-link">Главная</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('catalog')); ?>" class="nav-link">Каталог</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('services')); ?>" class="nav-link">Услуги</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('our_work')); ?>" class="nav-link">Наша работа</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('reviews')); ?>" class="nav-link">Отзывы</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('about')); ?>" class="nav-link">О Нас</a>
		  			</li>
		  			<li class="nav-item">
		  				<a href="<? print(Url('contacts')); ?>" class="nav-link">Контакты</a>
		  			</li>
		  		</ul>
		  	</div>
	  		<div class="col-9 col-sm-12 col-lg-3">
					<form action="#" class="d-flex">
			  			<input type="search" placeholder="Поиск" class="form-control">	
			  			<button type="button" class="search">
			  				<span class="search-icon"></span>
			  			</button>
			  		</form>
				</div>
			</div>
		</div>
	</nav>
</header>