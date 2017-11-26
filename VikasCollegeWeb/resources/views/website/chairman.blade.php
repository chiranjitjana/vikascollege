@include('website.header')
<div class="container-fluid">
	<div class="row hide-on-med-and-down">
		<div id="owl-demo" class="owl-carousel owl-theme">

			<div class="item">
				<img src="assets/img/stud.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/placement.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/library.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/4.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/activity.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/college.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/courses.jpg" alt="Owl Image">
			</div>
			<div class="item">
				<img src="assets/img/library.jpg" alt="Owl Image">
			</div>


		</div>
	</div>
</div>

<div class="container">


	<div class="row ">
		<div class="col s12 m3 card1">
			<div class="collection  grey lighten-4">
				<a href="/about" class="collection-item grey lighten-4">About</a> <a
					href="/about/history" class="collection-item grey lighten-4">History</a>
				<a href="/about/vision" class="collection-item grey lighten-4">Vision
					and Mission</a> <a href="/about/principal"
					class="collection-item  grey lighten-4">Principal Desk</a> <a
					href="/about/chairman" class="collection-item  active">Chairman
					Desk</a> <a href="/about/committee"
					class="collection-item grey lighten-4">Committees</a> <a
					href="/about/alumini" class="collection-item grey lighten-4">Alumini</a>
			</div>
		</div>

		<div class="col s12 m9">
			<h5 class="center heading white-text" style="padding: 6px;">Chairman
				Desk</h5>
			<div class="row card-panel  z-depth-1">
				<div class="col s10 m3">
					<div class="card img-box ">
						<div class="card-image">
							<img
								src="{{URL::asset('website/img/shri. P.M. Raut, Chairman, Vidya vikas education society.jpg')}}">
						</div>
					</div>
				</div>
				<div class="col s12 m8 offset-m1 box">

					<blockquote>
						<span class="justify black-text"> Higher education implies not
							just the acquisition of degrees but also developing the skills
							required to succeed in the competitive globalised environment. We
							at Vikas College offer our students quality education along with
							opportunities for multi-dimensional personality development. We
							provide a conducive atmosphere and proper infrastructure for
							research thereby encouraging students to explore the frontiers of
							knowledge. </span>
						<p></p>
						<span class="right black-text"> Chairman,<br> Shri. P.M. Raut

						</span>
					</blockquote>

				</div>
			</div>

		</div>
	</div>
</div>


@include('website.footer')
