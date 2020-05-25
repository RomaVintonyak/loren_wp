<!--foter-->
<footer class="page-footer font-small unique-color-dark pt-0 mb-0">
    <div style="background-color: #717171">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Ми у соціальних мережах</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a href="https://www.facebook.com/oksanavolodynyrivna" target="_blank" class="fb-ic ml-0">
                        <i class="fab fa-facebook white-text mr-4"></i>
                    </a>
                    <a href="https://www.instagram.com/wedding_decor_loren/" target="_blank" class="fb-ic ml-0">
                        <i class="fab fa-instagram white-text mr-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center text-md-left">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Loren</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 48px">
                <p>Студія весільного декору та флористики, м. Івано - Франківськ</p>
                <p class="footer-copyright">Всі права захищено &copy;2019 - <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold"><strong>Links</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 45px">
                <p><a href="src/our-services.html">Наші послуги</a></p>
                <p><a href="src/adout-us.html">Про нас</a></p>
                <p><a href="src/galery.html">Галерея</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold"><strong>Контакти</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px">
                <p><i class="fas fa-phone mr-3"></i>095 02 35 779</p>
                <p><i class="fab fa-viber mr-3"></i>097 23 49 231</p>
                <p><i class="fas fa-envelope mr-3"></i>loren.decor@ukr.net</p>
            </div>
        </div>
    </div>
</footer>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!--conect ases js file-->
<script type="text/javascript" src="../js/access.js"></script>
<!--wow init-->
<script type="text/javascript">
    new WOW().init();
</script>
<!--Scroll script-->
<script type="text/javascript">
    //** 1) Adds ability to scroll to an absolute position (from top of page) or specific element on the page instead.
    //** 2) Fixes scroll animation not working in Opera.
    var scrolltotop = {
        setting: {startline: 100, scrollto: 0, scrollduration: 1000, fadeduration: [500, 100]},
        controlHTML: '<img src="img/index/icon/knopka.png" style="width:48px; height:48px" />',
        controlattrs: {offsetx: 25, offsety: 25},
        anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links
        state: {isvisible: false, shouldvisible: false},
        scrollup: function () {
            if (!this.cssfixedsupport)
                this.$control.css({opacity: 0})
            var dest = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto)
            if (typeof dest == "string" && jQuery('#' + dest).length == 1)
                dest = jQuery('#' + dest).offset().top
            else
                dest = 0
            this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
        },
        keepfixed: function () {
            var $window = jQuery(window)
            var controlx = $window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
            var controly = $window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
            this.$control.css({left: controlx + 'px', top: controly + 'px'})
        },
        togglecontrol: function () {
            var scrolltop = jQuery(window).scrollTop()
            if (!this.cssfixedsupport)
                this.keepfixed()
            this.state.shouldvisible = (scrolltop >= this.setting.startline) ? true : false
            if (this.state.shouldvisible && !this.state.isvisible) {
                this.$control.stop().animate({opacity: 1}, this.setting.fadeduration[0])
                this.state.isvisible = true
            }
            else if (this.state.shouldvisible == false && this.state.isvisible) {
                this.$control.stop().animate({opacity: 0}, this.setting.fadeduration[1])
                this.state.isvisible = false
            }
        },
        init: function () {
            jQuery(document).ready(function ($) {
                var mainobj = scrolltotop
                var iebrws = document.all
                mainobj.cssfixedsupport = !iebrws || iebrws && document.compatMode == "CSS1Compat" && window.XMLHttpRequest
                mainobj.$body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body')
                mainobj.$control = $('<div id="topcontrol">' + mainobj.controlHTML + '</div>')
                    .css({
                        position: mainobj.cssfixedsupport ? 'fixed' : 'absolute',
                        bottom: mainobj.controlattrs.offsety,
                        right: mainobj.controlattrs.offsetx,
                        opacity: 0,
                        cursor: 'pointer'
                    })
                    .attr({title: 'На верх'})
                    .click(function () {
                        mainobj.scrollup();
                        return false
                    })
                    .appendTo('body')
                if (document.all && !window.XMLHttpRequest && mainobj.$control.text() != '')
                    mainobj.$control.css({width: mainobj.$control.width()})
                mainobj.togglecontrol()
                $('a[href="' + mainobj.anchorkeyword + '"]').click(function () {
                    mainobj.scrollup()
                    return false
                })
                $(window).bind('scroll resize', function (e) {
                    mainobj.togglecontrol()
                })
            })
        }
    }
    scrolltotop.init()
</script>

<?php wp_footer(); ?>
</body>
</html>