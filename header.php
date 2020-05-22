<header>
	<nav class="navbar navbar-expand-lg navbar-light ">
  		<a class="navbar-brand" href="index.php"><img width="90px" src="images/lol.png"></img></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link a-head" href="champion.php">Tous les champions<span class="sr-only">(current)</span></a>
			  	</li>
			</ul>
    		<form action="recherche.php" method="get" class="form-inline my-2 my-lg-0">
				<section class="flex_recherche">
					<article>
						<input class="form-control mr-sm-2" list="data"  id="autob" type="text" onkeyup="autocomp('1')" name="search" />
						<input id="color_button_header" class="my-2 my-sm-0"  type="submit" />
					</article>
					
					<article id="datab">
						
					</article>

				</section>
			</form>
  		</div>
	</nav>
</header>

