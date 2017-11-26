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
                    <a href="/admission/attendence" class="collection-item grey lighten-4">Attendance</a>
                    <a href="/admission/character" class="collection-item grey lighten-4">Character Building</a>
                    <a href="/admission/general_rule" class="collection-item active">General Instructions</a>
                    <a href="/admission/refund_of_fees" class="collection-item grey lighten-4">Refund of Fees</a>
                </div>
            </div>

            <div class="col s12 m9">
                <div class="justify card-panel">
                    <h5 class="center heading white-text" style="padding:6px;">General Instructions</h5>

                    <p>
                        All students who have taken admission in the college must possess a valid Identity Card. (Identity cards are issued by the college at the beginning of the first term.) Identity card is subject to inspection any day by the Principal or Teaching and Non
                        Teaching Staff. Students must carry with them their Identity Card while in the campus and should produce it as and when demanded for checking. Identity card should be carefully preserved and the holder of the identity card will
                        be held responsible for its misuse. In case of loss of Identity card, a duplicate must be obtained by paying the prescribed charges and fulfilling the necessary formalities.
                    </p>
                    <p>
                        Students should read the notices on the Notice Boards regularly.
                    </p>
                    <p>
                        Students should submit applications for scholarships / free ships etc. as also the Enrollment form (for first year degree students) on time as per the Notices issued.
                    </p>
                    <p>
                        Students must maintain silence in the classes, Library, Reading Room, Office, Laboratories and the corridors. When they are free they should make use of the college library and must not loiter about on the College premises or assemble in the corridor.
                        Loud conversation and shouting should be avoided.
                    </p>
                    <p>
                        Absence in any lecture in a day will lead to losing the attendance for the whole day. Minimum 75% attendance and satisfactory progress in studies are the essential requirements for students to eligible to appear for University examinations.
                    </p>
                    <p>
                        Students should clear all dues before the end of First term

                    </p>
                </div>

            </div>
        </div>
    </div>
@include('website.footer')