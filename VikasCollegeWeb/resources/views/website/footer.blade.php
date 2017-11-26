<style>
.page-footer {
    padding-top: 20px;
    background-color: #4a4747;
}

.page-footer .footer-copyright {
    overflow: hidden;
    min-height: 50px;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 10px 0px;
    color: rgba(255,255,255,0.8);
    background-color:#373737;
}
</style>


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l3 offset-l1 s12">
                <h5 class="white-text wow slideInUp">Quick Links</h5>
                <ul class="wow slideInUp">
                    <li><a class="grey-text text-lighten-3" href="/academic/courses">Courses</a></li>
                    <li><a class="grey-text text-lighten-3" href="/admission">Admission</a></li>
                    <li><a class="grey-text text-lighten-3" href="/academic/departments">Faculty</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Examination</a></li>
                    <li><a class="grey-text text-lighten-3" href="/library">Library</a></li>
                </ul>
            </div>
            <div class="col l3 offset-l1 s12">
                <h5 class="white-text wow slideInUp">Update</h5>
                <ul class="wow slideInUp">
                    <li><a class="grey-text text-lighten-3" href="/updates/event">Event</a></li>
                    <li><a class="grey-text text-lighten-3" href="/updates/notice">Notice</a></li>
                    <li><a class="grey-text text-lighten-3" href="/updates/event">News</a></li>
                    <li><a class="grey-text text-lighten-3" href="/updates/placement">Placement</a></li>
                </ul>
            </div>
            <div class="col l3 offset-l1 s12">
                <h5 class="white-text wow slideInUp">More About</h5>
                <ul class="wow slideInUp">
                    <li><a class="grey-text text-lighten-3" href="/about">Vikas College</a></li>
                    <li><a class="grey-text text-lighten-3" href="/about/committee">Committe</a></li>
                    <li><a class="grey-text text-lighten-3" href="/about/principal">Principal Desk</a></li>
                    <li><a class="grey-text text-lighten-3" href="/about/chairman">Chairman Desk</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container wow slideInUp">
            © Vikas College Of Arts, Science And Commerce
            <a class="grey-text text-lighten-4 right" href="http://www.websoulsolutions.com/">Websoul Solutions</a><br>
            <a class="grey-text text-lighten-4 right" href="http://www.vikascollege.co.in/redi/">Redi College</a>
        
        </div>
    </div>
</footer>


<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="{{URL::asset('website/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('website/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('website/js/header.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('website/js/marquee.js')}}"></script>
{{--<script type="text/javascript" src="{{URL::asset('website/js/owl.carousel.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{URL::asset('website/js/wow.js')}}"></script>--}}
<script type="text/javascript" src="{{URL::asset('website/js/wow.min.js')}}"></script>
<script>

    $(document).ready(function() {
        console.log('hhh');
        $('.materialboxed').materialbox();
        $('.tabs').tabs();
        $('.carousel').carousel({
            dist: 0,
            shift: 0,
            padding: 20
        });
        $('.simple-marquee-container').SimpleMarquee({
            duration: 170000,
            padding: 10,
            hover: true
        });

    });

</script>

<script>
    new WOW().init();
</script>

</body>

</html>