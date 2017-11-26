@include('website.header')

    <div class="container">


        <div class="row ">
            <div class="col s12 m3 card1">
                <div class="collection card-panel grey lighten-4 card-nav">
                    <a href="/academic" class="collection-item grey lighten-4">Academics</a>
                    <a href="/academic/courses" class="collection-item grey lighten-4">Courses</a>
                    <a href="/academic/courses/departments" class="collection-item active">Faculty &amp; Departments</a>
                    <a href="/academic/calender" class="collection-item grey lighten-4">Academic Calender</a>
                    <a href="/academic/syllabus" class="collection-item grey lighten-4">Syllabus</a>
                </div>
            </div>
            <div class="col s12 m9">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image">
                                <a href="#">
                                    <img src="{{URL::asset('website/img/principal.jpg')}}">
                                </a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image">
                                <a href="#">
                                    <img src="{{URL::asset('website/img/principal.jpg')}}">
                                </a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image">
                                <a href="#">
                                    <img src="{{URL::asset('website/img/principal.jpg')}}">
                                </a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image">
                                <a href="#">
                                    <img src="{{URL::asset('website/img/principal.jpg')}}">
                                </a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image">
                                <a href="#"><img src="{{URL::asset('website/img/principal.jpg')}}"></a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card faculty ">
                            <div class="card-image ">
                                <a href="#"> <img src="{{URL::asset('website/img/principal.jpg')}}"> </a>
                            </div>
                            <div class="card-content">
                                <p class="justify">Demo</p>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @include('website.footer')