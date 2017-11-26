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
					class="collection-item  active">Principal Desk</a> <a
					href="/about/chairman" class="collection-item grey lighten-4">Chairman
					Desk</a> <a href="/about/committee"
					class="collection-item grey lighten-4">Committees</a> <a
					href="/about/alumini" class="collection-item grey lighten-4">Alumini</a>

			</div>
		</div>

		<div class="col s12 m9">
			<h5 class="heading white-text">Principal Desk</h5>
			<div class="row card-panel z-depth-1">
				<div class="col s10 m3">
					<div class="card img-box ">
						<div class="card-image">
							<img src="{{URL::asset('website/img/Principal Dr. R.K. Patra.jpg')}}">
						</div>
					</div>
				</div>
				<div class="col s12 m8 offset-m1 box">


					<span class="justify black-text"> It is indeed an honour and
						privilege to be the Principal of Vikas Night College of Arts,
						Science and Commerce. Vikas College was especially started in the
						night session in 1986 with an intention of imparting higher
						education to the employed students. Providing educational
						opportunities to the needy section of the society is its unique
						selling proposition. Empowerment of the underprivileged classes to
						bring social transformation through dynamic education along with
						an adaptation to the ever-changing scenario of education has
						always been the aim of our institution. Therefore keeping pace
						with the changing times, today it offers more than 13 degree
						courses as well as post graduate courses like M. Com. in
						Accountancy and Management, M. Sc. in Chemistry, Biotechnology,
						professional degree courses like B.Voc. in Media Production and
						Medical Laboratory Technology, B. Com. (Accounting and Finance)
						and B.M.S. Besides the college also has centers of Yeshwantrao
						Chavan Maharashtra Open University, Nasik, Vikas Career College,
						Institution of Distance Education, Mumbai, Tilak Maharashtra
						University, Pune which provide an opportunities of learning
						specially to those who cannot attend the regular college. Today
						the college is a reaccredited institution with A grade with CGPA
						of 3.15 and also an ISO 9001-2008 certified institution. </span>
					<p></p>
					<span class="right black-text"> Principal,<br> Dr. R.K. Patra

					</span>


				</div>
			</div>

		</div>
	</div>
</div>


@include('website.footer')
