@extends('layout.main')

@section('container')
<section class="bg blog-cover margin-100px-top">
    <div class="container">
        <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
            <p class="text-white margin-5px-bottom">Stakeholder</p>
            <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                Info Grafis Dosen</h5>
        </div>
    </div>
</section>
<!-- blog cover end-->

<section id="infografisdosen">
    <div class="container">
        <div class="row">
            <h4>Karya Dosen</h4>
            <p>4 tahun terakhir (2018-2022)</p>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
    </div>
</section>

<!-- start feature -->
<section id="jabatanfungsional" class="how-it-work text-center bg-light-gray no-transition">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center center-col last-paragraph-no-margin">
                <div class="sec-title margin-100px-bottom">
                    <h3 class="text-capitalize alt-font text-extra-dark-gray font-weight-300">
                        Dosen Berdasarkan Jabatan Fungsional</h3>
                </div>
            </div>
        </div>

        <div class="how-one-container">
            <!--how it work Box-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">2 Dosen</div>
                    <h6>Guru Besar</h6>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="how-box-one inner-box sm-margin-100px-bottom xs-margin-100px-bottom">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-group" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">3 Dosen</div>
                    <h6>Sertifikasi Profesi</h6>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="how-box-one inner-box">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">8 Dosen</div>
                    <h6>Lektor Kepala</h6>
                </div>
            </div>

            <!--how it work Box-->
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="how-box-one inner-box">
                    <div class="icon-box bg-blue">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                    </div>
                    <div class="text-large text-extra-dark-gray margin-20px-bottom">Development</div>
                    <p>Capitalise on low hanging fruit to identify a ballpark value added activity.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--end feature -->
@endsection