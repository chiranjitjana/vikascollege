@include('website.header')
    <div class="container-fluid">
        <div class="row hide-on-med-and-down">
            <div id="owl-demo" class="owl-carousel owl-theme">

                 <div class="item"><img src="{{URL::asset('website/img/stud.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/placement.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/library.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/4.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/activity.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/college.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/courses.jpg')}}" alt="Owl Image"></div>
                <div class="item"><img src="{{URL::asset('website/img/library.jpg')}}" alt="Owl Image"></div>


            </div>
        </div>
    </div>

    <div class="container">


        <div class="row">
            <div class="col s12 m3 ">
                <div class="collection grey lighten-4">
                    <a class="collection-item grey lighten-4" href="/admission">Admission</a>
                    <a href="/admission/attendence" class="collection-item active">Attendance</a>
                    <a href="/admission/character" class="collection-item grey lighten-4">Character Building</a>
                    <a href="/admission/general_rule" class="collection-item grey lighten-4">General Instructions</a>
                    <a href="/admission/refund_of_fees" class="collection-item grey lighten-4">Refund of Fees</a>
                </div>
            </div>

            <div class="col s12 m9">
                <div class="justify card-panel">
                    <h5 class="center heading white-text" style="padding:6px;">Attendance</h5>

                    <p style="margin: 8px; padding: 5px">
                        For granting the terms in each subject minimum attendance of 75 percent of the theory lectures, practical and tutorial (wherever prescribed) separately will be required out of the total number of lectures, practical and tutorials in the subject conducted
                        in the term.
                    </p>
                    <p style="margin: 8px";>
                        A student who has been given certain class work or homework has to complete it to the satisfaction of the concerned teacher.
                    </p>
                    <p style="margin: 8px;">
                        A student who is not able to attend his/her classes regularly and/or who is not able to complete his/her tutorial/project/assignments properly will not be permitted to appear for the examinations as per the University norms.
                    </p>
                </div>

            </div>
        </div>
    </div>

@include('website.footer')