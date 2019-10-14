<nav class="navbar navbar-expand-lg navStyle">   
	<a class="brand-navbar" href=""><img src="/media/logo.jpg" alt="FerreMax" height="60px"></a>
	<a href="/" class="navbar-brand">FerreMax</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
		<span><i class="fas fa-align-right iconStyle"></i></span>
	</button>
	<div class="collapse navbar-collapse" id="mainMenu">
		<ul class="navbar-nav ml-auto navList">
			<?php 
			foreach($this->menu as $item){
				if(isset($item['label']) && isset($item['controller']) && isset($item['action'])){
					$item['icon'] = !isset($item['icon']) ? "" : $item['icon'];
					$active = ((isset($_GET['controller']) && $_GET['controller'] == $item['controller']) && (isset($_GET['action']) && $_GET['action'] == $item['action'])) ? " active" : "";
					$add_text = ((isset($_GET['controller']) && $_GET['controller'] == $item['controller']) && (isset($_GET['action']) && $_GET['action'] == $item['action'])) ? " <span class=\"sr-only\">(current)</span>" : "";
					echo "<li class=\"nav-item{$active}\">"."<a href=\"{$helper->url($item['controller'], $item['action'])}\" class=\"nav-link\"><i class=\"{$item['icon']}\"></i>{$item['label']}{$add_text}</a></li>";
				}
			}
			?>
		</ul>
	</div>
</nav> 


			<?php 
			/*
			foreach($menu as $item){
				if(isset($item['label']) && isset($item['controller']) && isset($item['action'])){
					echo "<a href=\"{$helper->url($item['controller'], $item['action'])}\">{$item['label']}</a>\n";
				}
			}
			*/
			?>