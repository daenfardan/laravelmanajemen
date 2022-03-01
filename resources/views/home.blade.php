@extends('layout.main')

@section('container')
    
<!-- start slider -->
<section class="no-padding no-transition margin-100px-bottom" id="home">
    <h1 class="display-none" aria-hidden="true">Manajemen UIN Bandung</h1>
<div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>
            <!-- SLIDE  -->
            <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="rev_gradient">
                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>

                <!-- MAIN IMAGE -->
                <img src="images/banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"  data-no-retina>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-140']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-start="1000" data-splitin="none" data-splitout="none">
                    <h3 class="text-white font-weight-100 alt-font">Selamat Datang</h3>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1200" data-splitin="none" data-splitout="none">
                    <h2 class="text-white alt-font font-weight-700">Program Studi Manajemen</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-start="1000" data-splitin="none" data-splitout="none">
                    <h3 class="text-white font-weight-100 alt-font">Fakultas Ekonomi dan Bisnis Islam</h3>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']" data-fontsize="['24','24','20','20']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-start="1500" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-100 alt-font">Universitas Islam Negeri</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['120','120','120','120']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']" data-fontsize="['24','24','20','20']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-start="1500" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-100 alt-font">Sunan Gunung Djati Bandung</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['200','200','200','200']"
                   data-width="200" data-height="none"
                   data-whitespace="normal" data-type="button"
                   data-actions='' data-responsive_offset="on"
                   data-textAlign="['center','center','center','center']"
                   data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                   data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                   data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'
                   style=" box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                    <a href="#." class="btn btn-blue btn-rounded btn-large">Selengkapnya</a>
                </div>
            </li>

            <!-- SLIDE 2  -->
            <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay">
                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                <!-- MAIN IMAGE -->
                <img src="images/banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="7" data-no-retina>
                <div class="rs-background-video-layer"
                     data-forcerewind="on"
                     data-volume="mute"
                     data-videowidth="100%"
                     data-videoheight="100%"
                     data-videomp4="video/video.mp4"
                     data-videopreload="auto"
                     data-videoloop="loopandnoslidestop"
                     data-forceCover="1"
                     data-aspectratio="16:9"
                     data-autoplay="true"
                     data-autoplayonlyfirsttime="false"></div>

                <!--If you need youtube video-->
                <!--<div class="rs-background-video-layer"
                data-ytid="hEkiWaEp03k"
                data-volume="mute"
                data-forcerewind="on"
                data-nextslideatend="true"
                data-autoplay="true"
                data-autoplayonlyfirsttime="true"
                data-videoloop="loopandnoslidestop"
                data-videoattributes="version=3&enablejsapi=1&html5=1&hd=1&autoplay=1&wmode=opaque&showinfo=0&rel=0&
                origin=http://server.local"></div>-->

                <div class="tp-caption tp-resizeme"
                     data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-50']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['left','left','left','center']"
                     data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1200" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-700 alt-font">Video Background </h2>
                </div>
                <div class="tp-caption tp-resizeme whitecolor"
                     data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','0','0']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['left','left','left','center']" data-fontsize="['24','24','20','20']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-start="1500" data-splitin="none" data-splitout="none">
                    <p class="text-white text-large font-weight-300">The Best Multipurpose One Page Template in Market</p>
                </div>
                <div class="tp-caption tp-resizeme text-center button btnwhite-hole pagescroll"
                   data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['90','80','80','80']"
                   data-whitespace="nowrap" data-type="button" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                   data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                   data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <a href="#." class="btn btn-blue btn-rounded btn-large">Selengkapnya</a>
                </div>
            </li>

            <!-- SLIDE 3  -->
            <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500">
                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>

                <!-- MAIN IMAGE -->
                <img src="images/banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>

                <div class="tp-caption tp-resizeme"
                     data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-50']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['right','right','right','center']"
                     data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1200" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-700 alt-font">Our Creative</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['right','right','right','center']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-start="1000" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-100 alt-font">Onepage Website</h2>
                </div>
                <div class="tp-caption tp-resizeme whitecolor"
                     data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['right','right','right','center']" data-fontsize="['24','24','20','20']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-start="1500" data-splitin="none" data-splitout="none">
                    <p class="text-white font-weight-300 text-large">The Best Multipurpose One Page Template in Market</p>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','160']"
                     data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                     data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                     data-type="button" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                    <a href="#." class="btn btn-blue btn-hvr-white btn-rounded btn-large margin-5px-right">Selengkapnya</a>
                    <a href="#." class="btn btn-transparent-white btn-rounded btn-large">Contact Us</a>
                </div>
            </li>
            <!-- SLIDE 4  -->
            <li data-index="rs-04" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" class="banner-overlay">
                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>

                <!-- MAIN IMAGE -->
                <img src="images/banner-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-140']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;"
                     data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-start="1000" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-100 alt-font">Imagination</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="1200" data-splitin="none" data-splitout="none">
                    <h2 class="text-white alt-font font-weight-700">Is The Beginning</h2>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-start="1000" data-splitin="none" data-splitout="none">
                    <h2 class="text-white font-weight-100 alt-font">Of Creation</h2>
                </div>
                <div class="tp-caption tp-resizeme whitecolor"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                     data-whitespace="nowrap" data-responsive_offset="on"
                     data-width="['none','none','none','none']" data-type="text"
                     data-textalign="['center','center','center','center']" data-fontsize="['24','24','20','20']"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-start="1500" data-splitin="none" data-splitout="none">
                    <p class="text-white text-large font-weight-300">The Best Multipurpose One Page Template in Market</p>
                </div>
                <div class="tp-caption tp-resizeme"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','160']"
                     data-width="200" data-height="none"
                     data-whitespace="normal" data-type="button"
                     data-actions='' data-responsive_offset="on"
                     data-textAlign="['center','center','center','center']"
                     data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                     data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                     data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'
                     style=" box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                    <a href="#." class="btn btn-transparent-blue btn-rounded btn-large">Selengkapnya</a>
                </div>
            </li>
        </ul>
    </div>
</div>
</section>
<!--Main Slider ends -->

<!--Some Services-->
<section id="fitur" class="how-it-work text-center bg-light-gray no-transition">
<div class="our-services no-transition bg-light-gray margin-100px-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="services-slider" class="owl-carousel">
                    <div class="item">
                        <div class="service-box">
                            <span><i class="fa fa-clipboard"></i></span>
                            <h6 class="text-white font-weight-600 alt-font">Well Documented</h6>
                            <p class="text-white">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span><i class="fa fa-laptop"></i></span>
                            <h6 class="text-white font-weight-600 alt-font">Fully Responsive</h6>
                            <p class="text-white">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span><i class="fa fa-support"></i></span>
                            <h6 class="text-white font-weight-600 alt-font">Full Support</h6>
                            <p class="text-white">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span><i class="fa fa-edit"></i></span>
                            <h6 class="text-white font-weight-600 alt-font">Clean Coded</h6>
                            <p class="text-white">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span><i class="fa fa-globe"></i></span>
                            <h6 class="text-white font-weight-600 alt-font">SEO Optimized</h6>
                            <p class="text-white">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--Some Services ends-->

<!-- start feature -->
<section id="profil" class="how-it-work text-center bg-light-gray no-transition">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
            <div class="sec-title margin-100px-bottom">
                <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                    Profil Program Studi Manajemen</h3>
            </div>
        </div>
        </div>

        <div class="how-one-container">
            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Sambutan Ketua Prodi</div>
                    <a href="/sambutanketuaprodi" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box sm-margin-100px-bottom xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Arah Kebijakan</div>
                    <a href="/arahkebijakan" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Sejarah</div>
                    <a href="/sejarah" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12 margin-40px-top">
                <div class="how-box-one inner-box sm-margin-100px-bottom xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Struktur Program Studi</div>
                    <a href="/strukturprogramstudi" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12 margin-40px-top">
                <div class="how-box-one inner-box xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Fasilitas</div>
                    <a href="/fasilitas" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-4 col-sm-6 col-xs-12 margin-40px-top">
                <div class="how-box-one inner-box sm-margin-100px-bottom xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Sertifikat BAN-PT</div>
                    <a href="/sertifikatbanpt" class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end feature -->

<section class="grey_section section_gap" id="akademik">
    <div class="container">
      <div class="heading">
        <h1><span>Akademik</h1>
      </div>
      <div class="row"> 
        <!-- Vertical tabs start-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#graphicesigning" aria-controls="graphicesigning" role="tab" data-toggle="tab">Akademik</a></li>
            <li role="presentation"><a href="#onlinemarketing" aria-controls="onlinemarketing" role="tab" data-toggle="tab">Panduan - Panduan </a></li>
            <li role="presentation"><a href="#brandstrategy" aria-controls="brandstrategy" role="tab" data-toggle="tab">Panduan Praktikum</a></li>
          </ul>
        </div>
        <!-- Vertical tabs end--> 
        <!-- Vertical tabs content start-->
        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 tab_text">
          <div class="tab-content"> 
            <!-- Vertical tabs content01 start-->
            <div role="tabpanel" class="tab-pane active" id="graphicesigning">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5"><img src="http://placehold.it/400x400" alt=""></div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                    <h3>Akademik</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col"><a class="btn btn-blue btn-rounded btn-large" href="/kurikulum">Kurikulum</a></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Jadwal Kuliah</a></th>
                                </tr>
                              </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            <!-- Vertical tabs content01 end--> 
            <!-- Vertical tabs content02 start-->
            <div role="tabpanel" class="tab-pane fade" id="onlinemarketing">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5"><img src="http://placehold.it/400x400" alt=""></div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                  <h3>Panduan - Panduan</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Akademik</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row"><a class="btn btn-blue btn-rounded btn-large"href="#">Panduan Usulan Penelitian</a></th>
                                </tr>
                                <tr>
                                    <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Sidang Komprehensif</a></th>
                                </tr>
                                <tr>
                                    <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Skripsi</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            <!-- Vertical tabs content02 end--> 
            <!-- Vertical tabs content03 start-->
            <div role="tabpanel" class="tab-pane fade" id="brandstrategy">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5"><img src="http://placehold.it/400x400" alt=""></div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                  <h3>Panduan Praktikum</h3>
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Praktikum Tilawah 1</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Praktikum Tilawah 2</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Praktikum Ibadah</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Praktikum Komputer</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Test dan Praktek Bahasa</a></th>
                            </tr>
                            <tr>
                                <th scope="row"><a class="btn btn-blue btn-rounded btn-large" href="#">Panduan Praktek Kerja Lapangan</a></th>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
            <!-- Vertical tabs content01 start--> 
          </div>
        </div>
        <!-- Vertical tabs content end--> 
      </div>
    </div>
  </section>

<!-- start about -->
<section id="jurnal" class="no-padding">

    <div class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="about-image hover-effect">
                        <img alt="" src="images/split-img1.jpg" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6 sm-padding-50px-tb">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">Jurnal Komitmen</h3>
                            <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                            <a href="#." class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="half-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding pull-right sm-float-none">
                    <div class="about-image hover-effect">
                        <img alt="" src="images/split-img2.jpg" class="equalheight">
                    </div>
                </div>
                <div class="col-md-6 sm-padding-50px-tb">
                    <div class="split-box text-center center-block equalheight">
                        <div class="about-box">
                            <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">Jurnal Branding</h3>
                            <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                            <a href="#." class="btn btn-transparent-blue btn-rounded btn-large margin-20px-top">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- start work -->
<section id="publisher" class="portfolio no-transition no-padding-bottom">

    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-50px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Publisher</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- filter links -->
        <div class="filtering col-sm-12 text-center margin-50px-bottom">
            <span data-filter=".jurnal">Jurnal</span>
            <span data-filter=".penelitian">Penelitian</span>
            <span data-filter=".pengabdian">Pengabdian Masyarakat</span>
        </div>

        <div class="clearfix"></div>
        <!-- gallery -->
        <div class="gallery text-center">

            <!-- gallery item -->
            <div class="col-md-3 items jurnal sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Jurnal Komitmen</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items jurnal sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Jurnal Branding</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Form Cek Plagiasi</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Buku ISBN</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-6.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Beasiswa</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-5.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Hak Cipta</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-4.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Pedoman Penelitian</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

              <!-- gallery item -->
              <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Ajuan Penelitian</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items penelitian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-9.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Direktori Skripsi</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items pengabdian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Pendoman Pengabdian Masyarakat</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items pengabdian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Ajuan Hibah Masyarakat</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items pengabdian sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Direktori Pengabdian Masyarakat</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="clear-fix"></div>

        </div>

    </div>
</section>
<!-- end work -->

<!-- start price -->
<section id="stakeholder">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Stakeholder</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom">
                <div class="price-item text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Dosen</h6>
                    <div class="price-tag alt-font table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><a href="/infografisdosen" class="btn btn-blue btn-rounded width-100">Info Grafis Dosen</a></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><a href="/profiledosen" class="btn btn-blue btn-rounded width-100">Profile Dosen</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-blue btn-rounded width-100">Direktori Publiskasi Dosen</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-blue btn-rounded width-100">Terpublikasi</a></th>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 sm-margin-30px-bottom">
                <div class="price-item center text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Mahasiswa</h6>
                    <div class="price-tag alt-font table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><a href="#." class="btn btn-white btn-rounded width-100">Info Grafis Mahasiswa</a></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-white btn-rounded width-100">Kode Etik Mahasiswa</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-white btn-rounded width-100">Beasiswa</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-white btn-rounded width-100">HMJ - Manajemen</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-white btn-rounded width-100">Prestasi Mahasiswa</a></th>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="price-item text-left">
                    <h6 class="alt-font font-weight-500 margin-10px-bottom">Alumni</h6>
                    <div class="price-tag alt-font table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><a href="#." class="btn btn-blue btn-rounded width-100">Info Grafis Alumni</a></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-blue btn-rounded width-100">Pusat Karir</a></th>
                              </tr>
                              <tr>
                                <th scope="row"><a href="#." class="btn btn-blue btn-rounded width-100">Angket Alumni</a></th>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- start price -->

<!-- start work -->
<section id="work" class="portfolio no-transition no-padding-bottom">

    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-50px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Galeri Kegiatan Birokrasi</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- filter links -->
        <div class="filtering col-sm-12 text-center margin-50px-bottom">
            <span data-filter="*" class="active">All</span>
            <span data-filter=".brand">Brand</span>
            <span data-filter=".web">Design</span>
            <span data-filter=".graphic">Graphic</span>
        </div>

        <div class="clearfix"></div>
        <!-- gallery -->
        <div class="gallery text-center">

            <!-- gallery item -->
            <div class="col-md-3 items graphic sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-1.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-1.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items brand sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-8.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-8.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items graphic sm-width-100">
                <div class="item-img">
                    <img src="images/galeri1.jpeg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/galeri3.jpeg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items web sm-width-100">
                <div class="item-img">
                    <img src="images/galeri4.jpeg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-6.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items web sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-5.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-5.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items graphic sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-4.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-4.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items brand sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-2.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-2.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery item -->
            <div class="col-md-3 items graphic sm-width-100">
                <div class="item-img">
                    <img src="images/Portfolio-9.jpg" alt="image">
                    <div class="item-img-overlay valign">
                        <div class="overlay-info width-100">
                            <h6 class="margin-5px-bottom">Recent Work</h6>
                            <p>See Our Amazing Work</p>
                        </div>
                        <a href="images/Portfolio-9.jpg" data-fancybox="images">
                            <i class="fa fa-camera portfolio-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="clear-fix"></div>

        </div>

    </div>
</section>
<!-- end work -->

<!-- clients -->
<section class="no-transition bg-very-light-gray">
    <h2 class="display-none" aria-hidden="true">boltex</h2>
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme owl-client">
                <div class="client item">
                    <img src="images/client-one.png" alt="image">
                </div>
                <div class="client item">
                    <img src="images/client-two.png" alt="image">
                </div>
                <div class="client item">
                    <img src="images/client-three.png" alt="image">
                </div>
                <div class="client item">
                    <img src="images/client-one.png" alt="image">
                </div>
                <div class="client item">
                    <img src="images/client-two.png" alt="image">
                </div>
                <div class="client item">
                    <img src="images/client-three.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- clients end -->

<!-- contact-->
<section id="contact" class="btn-version">
    <div class="get-quote-section xs-text-center">
        <div class="container">
            <div class="row clearfix">
                <!--Form Column-->
                <div class="col-md-6">
                    <div class="sec-title margin-50px-bottom">
                        <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                            Lets Get In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                            illum ratione atque praesentium
                            laudantium quaerat laborum consecteturLorem ipsum dolor sit amet, consectetur adipisicing
                            elit.</p>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <p class="text-small">San Francisco, CA 560 Bush St & 20th Ave,<br> Apt 5 San Francisco, 230909</p>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11">
                            <p class="text-small">+01 2323 7328 322<br>+01 2323 7328 322</p>
                        </div>
                    </div>
                    <div class="row margin-15px-bottom">
                        <div class="col-sm-1 no-padding">
                            <div class="contact-icon text-blue">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-11 xs-margin-50px-bottom">
                            <p class="text-small">email@demo.com<br>www.demo.com</p>
                        </div>
                    </div>
                </div>
                <div class="form-column col-md-6">
                    <div class="contact-form">
                        <!--Title-->
                        <form class="form_class">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form_inputs" name="phone no" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <div class="form-group">
                                <textarea name="message" id="message" class="form_inputs form_inputs_two" rows="6"
                                          cols="25" placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="button">
                                    <a href="#." class="btn btn-blue btn-rounded btn-large text-extra-small width-100">Get
                                        Started</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->
@endsection