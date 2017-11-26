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

        <div class="row ">
            <div class="col s12 m3 card1">
                <div class="collection card-panel grey lighten-4 card-nav">
                    <a href="/academic" class="collection-item grey lighten-4">Academics</a>
                    <a href="/academic/courses" class="collection-item grey lighten-4">Courses</a>
                    <a href="/academic/courses/departments" class="collection-item grey lighten-4">Faculty &amp; Departments</a>
                    <a href="/academic/calender" class="collection-item grey lighten-4">Academic Calender</a>
                    <a href="/academic/syllabus" class="collection-item active">Syllabus</a>
                </div>
            </div>
            <div class="col s12 m9">
                {{--<div class="card-panel">
                    <div class="row">
                       <h4 class="center">Syllabus Academic Year 2017-18</h4>
                    </div>
                </div>--}}
                <div class="card-panel">
                    <h5 class="center">Under Graduate Courses</h5>
                    <p></p>
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">filter_drama</i>Bachelor Of Arts</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Bachelor Of Science</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Bachelor Of Science(Bio Technology)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Bachelor Of Science(Information Technology)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">whatshot</i>Bachelor Of Commerce</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">whatshot</i>Bachelor Of Commerce(Accounting &amp; Finance)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">whatshot</i>B.M.S</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>



                    <h5 class="center">Post Graduate Courses</h5>
                    <p></p>
                    <ul class="collapsible popout" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">filter_drama</i>Master Of Arts(Economics)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Master Of Science(Organic Chemistry)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Master Of Science(Bio Technology)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">place</i>Master Of Science(Information Technology)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">whatshot</i>Master Of Commerce(Accountancy)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header blue-grey white-text"><i class="material-icons">whatshot</i>Master Of Commerce(Business Management)</div>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    {{--<table class="bordered">
                        <thead>
                        <th>Course</th>
                        <th></th>
                        <th>Semester</th>
                        <th></th>
                        </thead>
                        <tr>
                            <td colspan="4" class="center"><b>Under Graduate Courses</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">B.A</td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Com(General)</td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Com(B.A.F) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.M.S </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Sc(General) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Sc(Bio-Technology) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Sc(IT) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.S(CS) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="center"><b>Vocational Degree Courses</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">B.Voc(Media Production) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                            </tr>
                        <tr>
                            <td colspan="2">B.Voc(Medical Lab Technology) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                    <li class="collection-item"> <a>Semester V & VI</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="center"><b>Post Graduate Courses</b></td>
                        </tr>
                        <tr>
                            <td colspan="2">M.Com(Adv. Accountancy) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a>Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">M.Com(Bus. Management) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a href="">Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">M.Sc(Chemistry) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a href="">Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">M.Sc(Bio - Technology) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a href="">Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">M.Sc(IT) </td>
                            <td colspan="2">
                                <ul class="collection">
                                    <li class="collection-item"> <a href="">Semester I & II</a></li>
                                    <li class="collection-item"> <a>Semester III & IV</a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>Research Ph.D</b></td>
                        </tr>
                    </table>--}}
                </div>
            </div>
        </div>
    </div>

@include('website.footer')