<div class="container-fluid p-0  mb-5 ">

	<!-- carousal secind -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 " src="https://i.postimg.cc/bNQp0RDW/1.jpg" alt="First slide">
				<div class="carousel-caption ">
					<h3 class="cardiv">Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://i.postimg.cc/pVzg3LWn/2.jpg" alt="Second slide">
				<div class="carousel-caption ">
					<h3 class="cardiv">Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg"
					alt="Third slide">
				<div class="carousel-caption ">
					<h3 class="cardiv">Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</div>
<style type="text/css">
	.cardiv {
		font-weight: 700;
		text-align: center;
		font-size: 40px;
		font-family: Hack, sans-serif;
		text-transform: uppercase;
		background: linear-gradient(90deg, #000, #fff, #000);
		letter-spacing: 5px;
		-webkit-background-clip: text;
		background-clip: text;
		-webkit-text-fill-color: transparent;
		background-repeat: no-repeat;
		background-size: 80%;
		animation: shine 5s linear infinite;
		position: relative;
	}

	@keyframes shine {
		0% {
			background-position-x: -500%;
		}

		100% {
			background-position-x: 500%;
		}

	}
</style>