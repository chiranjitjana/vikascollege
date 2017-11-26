@include('website.header')

    <div class="container">
        <div class="row hide-on-small-only">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item col s12"><img src="assets/img/stud.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/placement.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/library.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/4.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/activity.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/college.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/courses.jpg" alt="Owl Image"></div>
                <div class="item col s12"><img src="assets/img/library.jpg" alt="Owl Image"></div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m3 card1">
                <div class="collection  card-panel grey lighten-4 card-nav">
                    <a href="/academic" class="collection-item grey lighten-4">Academics</a>
                    <a href="/academic/courses" class="collection-item grey lighten-4">Courses</a>
                    <a href="/academic/courses/departments" class="collection-item active">Faculty &amp; Departments</a>
                    <a href="/academic/calender" class="collection-item grey lighten-4">Academic Calender</a>
                    <a href="/academic/syllabus" class="collection-item grey lighten-4">Syllabus</a>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="justify  grey lighten-4 card2">
                    <h5 class="center heading">Faculties &amp; Departments</h5>
                    <div class="row">
                        <div class="col m5 s12 offset-m1 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div class="center">
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text">Faculty of Arts</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col m5 s12 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div class="center">
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text">Faculty of Science</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m5 s12 offset-m1 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div class="center">
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text">Faculty of Commerce</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col m5 s12 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div>
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text center">Library</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col m5 s12 offset-m1 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div class="center">
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text">Office Staff</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col m5 s12 program">
                            <div class="card-panel">
                                <div class="card-image">
                                    <img src="{{URL::asset('website/img/library.jpg')}}" width="220">
                                </div>
                                <div>
                                    <a href="/academic/courses/departments/faculty">
                                        <p class="teal-text center">Other</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@include('website.footer')