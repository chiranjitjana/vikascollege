@include('website.header')
  <!-- Bootstrap -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
 
<style>
.marquee-sibling {
    padding: 0;
    background: #f4bb36;
    width: 15%;
    height: 40px;
    line-height: 40px;
    font-size: 12px;
    font-weight: normal;
    color: #ffffff;
    text-align: center;
    float: left;
    left: 0;
    z-index: 2000;
}


.simple-marquee-container {
    width: 100%;
    background: #ffffff;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    height: 40px;
    position: relative;
    cursor: pointer;
}

.marquee-content-items li {
    display: inline-block;
    line-height: 40px;
    color: #504646;
}



</style>
 <style type="text/css">

    h1 { color:#fff;}
        .jlr {font-size: 0;}

.jlr .jlr_item {
    font-size: 1rem;
    display: inline-block;
    box-sizing: border-box;     
    padding: 5px;
}

.jlr img.jlr_img {
    height: 200px;
    opacity: 0;

}

.jlr img.jlr_loaded {
     -webkit-transition: opacity 1s ease-in;
    -moz-transition: opacity 1s ease-in;
    -o-transition: opacity 1s ease-in;
    -ms-transition: opacity 1s ease-in;
    transition: opacity 1s ease-in;
    opacity: 1;
}

.gray_out {
    background-color: #eee;
}
        </style>


    <div class="container-fluid z-depth-1" style="height:40px;">
        <div class="simple-marquee-container">

            <div class="marquee">
                <ul class="marquee-content-items">
                    <li>This is highlight Item 1</li>
                    <li>This is highlight Item 2</li>
                    <li>This is highlight Item 3</li>
                    <li>This is highlight Item 4</li>
                    <li>This is highlight Item 5</li>
                </ul>
            </div>
            <div class="marquee-sibling hide-on-small-only">
                Highlights
            </div>
        </div>
    </div>





    <div class="container-fluid">

        <div class="row" style="padding:0px;">
            <div class="col m9" style="padding:0px;">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{URL::asset('website/contentimg/college_gate.jpg')}}">

                            <!-- random image -->
                            <div class="caption center-align">
                                <!--<h3>This is our big Tagline!</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                            </div>
                        </li>
                        <li>
                            <img src="{{URL::asset('website/contentimg/DSC01980.JPG')}}">
                            <!-- random image -->
                            <!--<div class="caption left-align">
				  <h3>Left Aligned Caption</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>-->
                        </li>
                        <li>
                            <img src="{{URL::asset('website/contentimg/gandhi.JPG')}}">
                            <!-- random image -->
                            <!--<div class="caption right-align">
				  <h3>Right Aligned Caption</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>-->
                        </li>
                        <li>
                            <img src="{{URL::asset('website/contentimg/noties_board.png')}}">
                            <!-- random image -->
                            <div class="caption center-align">
                                <!--<h3>This is our big Tagline!</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rewards col s12 m3" style="padding:0px;">


                    <ul class="tabs tabs-fixed-width" style="background-color:#fccc48">
                        <li class="tab col s4"><a class="white-text" href="#test"><b>Events</b></a></li>
                        <li class="tab col s4"><a class="white-text" href="#test1"><b>Notice</b></a></li>
                        <li class="tab col s4"><a class="white-text" href="#test2"><b>News</b></a></li>
                    </ul>


                <div id="test" class="col s12" style="padding:0px;">
                    <ul class="collection with-header" style="margin:0px; border:0px;">

                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                <span class="badge orange white-text">new</span>Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
									Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
								</a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
									Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
								</a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
									Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
								</a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
									Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
								</a>
                        </li>
                        <li class="collection-item center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">More</button>
                        </li>
                    </ul>
                </div>

                <div id="test1" class="col s12" style="padding:0px;">
                    <ul class="collection with-header" style="margin:0px; border:0px;">

                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                <span class="badge orange white-text">new</span>Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">More</button>
                        </li>
                    </ul>
                </div>

                <div id="test2" class="col s12" style="padding:0px;">
                    <ul class="collection with-header" style="margin:0px; border:0px;">

                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                <span class="badge orange white-text">new</span>Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item avatar valign-wrapper">
                            <img src="{{URL::asset('website/img/logo.jpg')}}" height="50" width="50" alt="logo" class="circle responsive-img">
                            <a href="#!" class="awards-text">
                                Accredited with ‘A’ Grade (2005-06 to 2010-11) Re-accredited with ‘A’ Grade (2012-13 to 2017-18)
                            </a>
                        </li>
                        <li class="collection-item center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">More</button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container wow slideInUp" {{--data-wow-duration="0.2s" data-wow-delay="0.4s"--}}>
        <div class="row hide-on-med-and-down" style="height:30px;"></div>
        <div class="row">
            <div class="col s12 col m9 offset-m1">
                <h4 class="bottom-border">Principal And Chairman Desk</h4>
            </div>
        </div>
    </div>


    <div class="container wow slideInUp" {{--data-wow-duration="0.3s" data-wow-delay="0.5s"--}}>
        <div class="row hide-on-med-and-down"></div>

        <div class="row">
            <div class="col m6">
                <h5 class="header center">Principal</h5>
                <div class="card horizontal">
                    <div class="card-image">
                            <img src="{{URL::asset('website/img/Principal Dr. R.K. Patra.jpg')}}" height="280">
                    </div>
                    <div class="card-stacked ">
                        <div class="card-content" style="padding:10px;">
                                <p class="justify ">It is indeed an honour and privilege to be the Principal of Vikas Night College of Arts, Science and Commerce. </p>
                                <p class="justify hide-on-med-and-down"> Vikas College was especially started in the night session in 1986 with an intention of imparting higher education to the employed students. </p>
                                <p class="right bottom black-text"><b>Dr. R.K. Patra</b></p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m6 ">
                <h5 class="header center">Chairman</h5>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{URL::asset('website/img/shri. P.M. Raut, Chairman, Vidya vikas education society.jpg')}}" height="280">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content" style="padding:10px;">
                                <p class="justify" style="padding: 4px">Higher education implies not just the acquisition of degrees but also developing the skills required to succeed in the competitive globalised environment. </p>
                                <p class="justify hide-on-med-and-down" style="padding-left:4px;padding-bottom: 10px;"> We at Vikas College offer our students quality education along with opportunities for multi-dimensional personality development. </p>
                                <p class="right bottom black-text" style="padding-top: 10px;"><b>Shri. P.M. Raut</b></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row hide-on-med-and-down" style="height:30px;"></div>
    </div>


    {{--<div class="container-fluid wow slideInUp">
        <div class="row">
            <div class="col s12 col m8 offset-m2">
                <h4 class="bottom-border">Vikas College of Arts, Science &amp; Commerce</h4>
            </div>
        </div>
        <div class="row">
            <div class="col m4">
                <h5 class="header center">Courses</h5>
                <div class="card horizontal ">
                    <div class="card-image hide-on-med-and-down">
                        <img src="{{URL::asset('website/img/courses.jpg')}}">
                    </div>
                    <div class="card-stacked ">
                        <div class="card-content ">
                            <a href="academic.html">
                                <p class="justify" style="padding:0px;">At present, the college offers 8 undergraduate, 2 vocational degree, 5 post-graduate courses and research Centre
                                    of University of Mumbai along with distance learning programs of 4 other Universities.</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">Library</h5>
                <div class="card horizontal ">
                    <div class="card-image hide-on-med-and-down">
                        <img src="{{URL::asset('website/img/library.jpg')}}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content ">
                            <p class="justify" style="padding: 0px">The library is located on the fourth floor of the main building of the college.
                                The library which started with an initial collection of 500 books has now grown up to a rich collection of 32000 books.</p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">Activity</h5>
                <div class="card horizontal ">
                    <div class="card-image hide-on-med-and-down">
                        <img src="{{URL::asset('website/img/activity.jpg')}}">
                    </div>
                    <div class="card-stacked ">
                        <div class="card-content ">
                            <p class="justify" style="padding: 0px;">The College has acquired a vibrant atmosphere due to co-curricular and extension activities.
                                It is a place to develop creative thoughts in young minds with emphasis on Cultural milieu.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col m4 ">
                <h5 class="header center">Campus</h5>
                <div class="card horizontal ">
                    <div class="card-image hide-on-med-and-down">
                        <img src="{{URL::asset('website/img/stud.jpg')}}">
                    </div>
                    <div class="card-stacked ">
                        <div class="card-content ">
                            <a href="#campus">
                                <p class="justify" style="padding: 0px;">College has a separate Gymkhana Office and a venue for Indoor games. A Huge Playground is available for outdoor games like cricket, football and handball.
                                    The ground has well-maintained .</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">About</h5>
                <div class="card horizontal">
                    <div class="card-image hide-on-med-and-down">
                        <a href="">
                            <img src="{{URL::asset('website/img/college.jpg')}}">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <a href="about.html">
                                <p class="justify" style="padding: 0px; margin-right: 2px;margin-bottom: 2px;">The college has been reaccredited with ‘A’ Grade by the NAAC and has been certified ISO-9001:2008.
                                    It has been actively involved in the growth, development and progress of the society through its awareness..</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">Placement</h5>
                <div class="card horizontal">
                    <div class="card-image hide-on-med-and-down">
                        <a href="placement.html">
                            <img src="{{URL::asset('website/img/placement.jpg')}}">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content ">
                            <a href="placement.html">
                                <p class="justify" style="padding: 0px;">Vikas College has established its reputation for highly motivated, committed and competent
                                    students who form a vast pool of human talent, with competencies in various fields of human activity.</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col m4 ">
                <h5 class="header center">Achievements</h5>
                <div class="card horizontal ">
                    <div class="card-image hide-on-med-and-down">
                        <img src="{{URL::asset('website/img/achievement.jpg')}}">
                    </div>
                    <div class="card-stacked blue darken-4">
                        <div class="card-content ">
                            <a href="#campus">
                                <p class="justify white-text">I am a very simple card. I am good at containing small bits of information.</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">Admission</h5>
                <div class="card horizontal">
                    <div class="card-image hide-on-med-and-down">
                        <a href="">
                            <img src="{{URL::asset('website/img/admission.jpg')}}">
                        </a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <a href="about.html">
                                <p class="justify" style="padding: 0px;">Admission will be on the basis
                                    of the aggregate marks in the qualifying examination or its equivalent, for both the undergraduate
                                    and the postgraduate courses, unless specified otherwise.</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col m4 ">
                <h5 class="header center">Facility</h5>
                <div class="card horizontal">
                    <div class="card-image hide-on-med-and-down">
                        <a href="placement.html">
                            <img src="{{URL::asset('website/img/facility.png')}}">
                        </a>
                    </div>
                    <div class="card-stacked amber darken-4">
                        <div class="card-content ">
                            <a href="placement.html">
                                <p class="justify white-text">I am a very simple card. I am good at containing small bits of information.</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>--}}


    <div class="container-fluid hide-on-small-only wow slideInUp" id="campus">
        <div class="row">
            <div class="col s12 col m8 offset-m2">
                <h4 class="bottom-border">College And Campus</h4>
            </div>
        </div>
        {{--<div class="row">
				<div id="jLightroom" class="jlr gray_out">
				   <a href="https://unsplash.it/500/500?image=1013" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/500/500?image=1013" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1200/600?image=1012" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1200/600?image=1012" class="jlr_img" /></a>
				   <a href="https://unsplash.it/300/700?image=1011" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/300/700?image=1011" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1005" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1005" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1004" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1004" class="jlr_img" /></a>
					<a href="https://unsplash.it/500/500?image=1013" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/500/500?image=1013" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1200/600?image=1012" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1200/600?image=1012" class="jlr_img" /></a>
				   <a href="https://unsplash.it/300/700?image=1011" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/300/700?image=1011" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1005" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1005" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1004" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1004" class="jlr_img" /></a>
					<a href="https://unsplash.it/500/500?image=1013" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/500/500?image=1013" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1200/600?image=1012" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1200/600?image=1012" class="jlr_img" /></a>
				   <a href="https://unsplash.it/300/700?image=1011" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/300/700?image=1011" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1005" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1005" class="jlr_img" /></a>
				   <a href="https://unsplash.it/1000/400?image=1004" data-lightbox="lb1" class="jlr_item"><img src="https://unsplash.it/1000/400?image=1004" class="jlr_img" /></a>
				</div>
        </div>--}}

        <div class="row">
            <div class="col s12 ">
                <div class="carousel" style="height: 320px;">
                    <a class="carousel-item" href="#one!" style="height: 300px; width: 300px;">
                        <img src="{{URL::asset('website/contentimg/activity.jpg')}}" height="300" width="300">
                    </a>
                    <a class="carousel-item" href="#two!" style="height: 300px; width: 300px;">
                        <img src="{{URL::asset('website/contentimg/stud.jpg')}}" height="300" width="300">
                    </a>
                    <a class="carousel-item" href="#three!" style="height: 300px; width: 300px;">
                        <img src="{{URL::asset('website/contentimg/college_gate.jpg')}}" height="300" width="300">
                    </a>
                    <a class="carousel-item" href="#four!" style="height: 300px; width: 300px;">
                        <img src="{{URL::asset('website/contentimg/fun1.jpg')}}" height="300" width="300">
                    </a>
                    <a class="carousel-item" href="#five!" style="height: 300px; width: 300px;">
                        <img src="{{URL::asset('website/contentimg/gandhi.JPG')}}" height="300" width="300">
                    </a>
                </div>
        </div>
        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{--<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="{{URL::asset('website/js/jquery.lightroom.js')}}"></script>
    
    <script type="text/javascript">
        $("#jLightroom").lightroom({
            image_container_selector: ".jlr_item",
            img_selector: "img.jlr_img",
            img_class_loaded: "jlr_loaded",
            img_space: 5,
            img_mode: 'min',
            init_callback: function(elem){$(elem).removeClass("gray_out")}
        }).init();
    </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>--}}

<script>
    $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({fullWidth: true,shift:25});
        $('.tabs').tabs();
        $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,
            indicators:true,
        });
    });
</script>

@include('website.footer')