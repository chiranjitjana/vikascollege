@include('website.header')
<div class="container-fluid">
	<div class="row hide-on-med-and-down">
		<div id="owl-demo" class="owl-carousel owl-theme">

			<div class="item">
				<img src="{{URL::asset('website/img/stud.jpg')}}" alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/placement.jpg')}}"
					alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/library.jpg')}}" alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/4.jpg')}}" alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/activity.jpg')}}"
					alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/college.jpg')}}" alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/courses.jpg')}}" alt="Owl Image">
			</div>
			<div class="item">
				<img src="{{URL::asset('website/img/library.jpg')}}" alt="Owl Image">
			</div>

		</div>
	</div>
</div>
<div class="container">

	<div class="row ">

		<div class="col s12 m10 offset-m1">
			<div class="justify card2">
				<h5 class="header heading white-text center">Facility</h5>
				<div class="row">
					<div class="col m12 s12 program">
						<div style="position: relative;">
							<div id="lab" class="card-panel" style="margin: 0px"></div>
							<h5>Laboratory</h5>
							<p>The college has twelve well equipped and furnished
								laboratories separately for Under-Graduate and Postgraduate
								programmes in different departments. The Bio-technology
								laboratory and the M.L.T. Laboratory are the distinguishing
								features of the college and are being used by the researchers
								for various advanced research projects in the subject.</p>
						</div>




						<div style="position: relative;">
							<div id="lib" class="card-panel" style="margin: 0px"></div>
							<h5>Library</h5>
							<p>The college has a spacious and well equipped library with
								following facilities.</p>
							<p>
								• About 35000 text books and reference books. <br /> • About 66
								Journals and periodicals and 12 newspapers. <br /> •
								E-resources such as e-journals, database, CDs and internet
								facilities. <br /> • Semi-automatised along with open access
								system. <br /> • Xerox facility is made available to students
								against due payment. <br /> • Spacious and well-ventilated
								reading room with capacity of 145 students.<br /> • Home
								lending of books and book bank scheme. <br /> • Decentralized
								departmental library units for the teachers and PG students. <br />
								• Timing from 8.00 a.m. to 10.00 p.m.
							</p>
						</div>

						<!-- <p class="divider"></p> -->

						<div style="position: relative;">
							<div id="gymkhana" class="card-panel" style="margin: 0px"></div>
							<h5>Gymkhana and Gymnasium</h5>
							<p>The college has three playgrounds accommodating a modern
								Volleyball court, an advanced Basketball court along with a
								Badminton hall and Gymnasium equipped with modern instruments.
								The college has a rich tradition of significant achievements at
								the state and the national level sports events. Students are
								encouraged to participate in various sports events at various
								levels and in order to nurture these talents among students,
								coaches are appointed for coaching the students particularly in
								Cricket, Basketball, Kabbaddi, Volleyball and Kho-Kho.</p>

						</div>


						<div style="position: relative;">
							<div id="placement" class="card-panel" style="margin: 0px"></div>
							<h5>Placement Cell</h5>
							<p>The college has a well established placement cell
								constituting senior faculties and professionals as its members.
								It co-ordinates the employers and students for meetings and
								interviews. As a regular feature, the cell provides guidance
								about career and placements to the student and ex-students. The
								cell organizes “Career Mela” and “Campus Selection” at least
								twice in a year.</p>

						</div>

						<div style="position: relative;">
							<div id="placement" class="card-panel" style="margin: 0px"></div>
							<h5>Auditorium and Conference Hall</h5>
							<p>The college has a huge auditorium accomodates 300 people.
								It has a theatre like stage and related properties. The college
								has a well equipped air conditioned conference hall for seminars
								and workshops.</p>
						</div>

						<div style="position: relative;">
							<div id="clab" class="card-panel" style="margin: 0px"></div>
							<h5>Computer Facility</h5>
							<p>The college has six computer laboratories with more than
								200 computer terminals with LAN and central server facility. All
								the departments, laboratories, the UGC-Network resource centre
								and college office have computer terminals. The college central
								library is also equipped with four computer terminals.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>


<style>
#lab {
	background: url(http://www.vikascollege.co.in/website/img/lab.jpg)
		repeat;
	position: absolute;
	width: auto;
	z-index: -1;
	opacity: 0.2;
	filter: alpha(opacity = 20);
	width: 100%;
	height: 100%;
}

#gymkhana {
	background: url(http://www.vikascollege.co.in/website/img/gymkhana.jpg)
		repeat;
	position: absolute;
	width: auto;
	z-index: -1;
	opacity: 0.2;
	filter: alpha(opacity = 20);
	width: 100%;
	height: 100%;
}

#lib {
	background:
		url(http://www.vikascollege.co.in/website/img/lib_facility.jpg) repeat;
	position: absolute;
	width: auto;
	z-index: -1;
	opacity: 0.2;
	filter: alpha(opacity = 20);
	width: 100%;
	height: 100%;
}

#placement {
	background:
		url(http://www.vikascollege.co.in/website/img/placement_facility.jpg)
		repeat;
	position: absolute;
	width: auto;
	z-index: -1;
	opacity: 0.2;
	filter: alpha(opacity = 20);
	width: 100%;
	height: 100%;
}

#clab {
	background:
		url(http://www.vikascollege.co.in/website/img/clab_facility.jpg)
		repeat;
	position: absolute;
	width: auto;
	z-index: -1;
	opacity: 0.2;
	filter: alpha(opacity = 20);
	width: 100%;
	height: 100%;
}

h5 {
	padding: 10px;
}
</style>

@include('website.footer')
