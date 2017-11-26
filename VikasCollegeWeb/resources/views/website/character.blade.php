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
                    <a href="/admission/character" class="collection-item active">Character Building</a>
                    <a href="/admission/general_rule" class="collection-item grey lighten-4">General Instructions</a>
                    <a href="/admission/refund_of_fees" class="collection-item grey lighten-4">Refund of Fees</a>
                </div>
            </div>

            <div class="col s12 m9">
                <div class="justify card-panel">
                    <h5 class="center heading white-text" style="padding:6px;">Character Building</h5>

                    <p>
                        The College has able and qualified staff who are building up a fine fibre of character in the students committed to its core to help them in later life. The institution expects observance of good conduct on the part of students. In this endeavour it needs
                        and, therefore hopes to receive advice, co-operation and assistance from parents. They have to be watchful over their children to ensure that they attend college regularly, abide by rules and regulations and devote themselves to
                        studies, cultural activities and to sports. They can consult the Principal and the teachers for any guidance they may need on this behalf.

                    </p>
                    <p>
                        In order to enable a student to dedicate himself in a spirit of thankfulness of the manifold gifts that God has showered on him and others, the College has arranged weekly Gita and Ethics classes in order to develop character and self confidence. A student
                        of the college has to attend any one of Gita or Ethics class and for daily morning prayers which are of non denominational character. </p>
                    <p>
                        A Student attired in any dress or with a hair style which is considered to be not in harmony with the environment, is not allowed to enter the premises or remain on the campus unless such student changes his/her dress and style so as to confirm to the
                        standards accepted by the Institution. The opinion of the Principal as regards proper dress code and hairstyle shall be final and binding.
                    </p>
                    <p>
                        It has also been observed that often the quiet academic atmosphere is disturbed by irrational playing of instruments. Therefore, no Radio, Transistor, Tape Recorder or Musical instruments is permitted on the campus except with previous written permission
                        of the Principal. Any student in possession of these instruments is liable to disciplinary action.
                    </p>
                </div>

            </div>
        </div>
    </div>

@include('website.footer')