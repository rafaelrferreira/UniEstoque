<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cycle 2</title>
</head>
<body>
	
	<!-- Lembre que o container do cycle tem que ter uma altura fixa e overflow hidden, pra não dar as carregadas doidera -->
	<div data-cycle-pause-on-hover= "true"
		 class= "cycle-slideshow"
		 data-cycle-fx= "fade"
		 data-cycle-timeout= "2000"
		 data-cycle-slides= "> .display-element"
		 data-cycle-prev= "> .display-prev"
		 data-cycle-next= "> .display-next"
		 data-cycle-pager= "> .display-pager" >

		<!-- Display Nav -->
		<div class="display-prev"> < </div>
		<div class="display-next"> > </div>
		<div class="display-pager"></div>

		<!-- Display Elements -->
		<div class="display-element">
			Conteúdo 1
		</div>
		<div class="display-element">
			Conteúdo 2
		</div>
		<div class="display-element">
			Conteúdo 3
		</div>
	</div>

	<!-- CAROUSEL EXEMPLO -->
	<!-- Lembre que o container do cycle tem que ter uma altura fixa e overflow hidden, pra não dar as carregadas doidera -->
	<div data-cycle-pause-on-hover= "true"
		 class= "cycle-slideshow"
		 data-cycle-fx= "carousel"
		 data-cycle-timeout= "2000"
		 data-cycle-carousel-visible= "5"
		 data-cycle-slides= "> .display-element"
		 data-cycle-prev= "> .display-prev"
		 data-cycle-next= "> .display-next"
		 data-cycle-pager= "> .display-pager" >

		<!-- Display Nav -->
		<div class="display-prev"> < </div>
		<div class="display-next"> > </div>
		<div class="display-pager"></div>

		<!-- Display Elements -->
		<div class="display-element">
			Conteúdo 1
		</div>
		<div class="display-element">
			Conteúdo 2
		</div>
		<div class="display-element">
			Conteúdo 3
		</div>
	</div>

	<script src="../assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="../assets/libs/cycle2/jquery.cycle2.min.js"></script>
	<script src="../assets/libs/cycle2/jquery.cycle2.carousel.min.js"></script>
</body>
</html>