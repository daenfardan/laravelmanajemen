@extends('layout.main')

@section('container')
<section class="bg blog-cover margin-100px-top">
    <div class="container">
        <div class="text-center sm-padding-40px-tb">
            <p class="text-white margin-5px-bottom">Akademik</p>
            <h2 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700 sm-padding-15px-lr">
                Kurikulum</h2>
        </div>
    </div>
</section>

<section id="kurikulum" class="shop-details text-left">
    <div class="container">
        <div class="row margin-80px-bottom">
            <h4>Semester 1</h4><hr>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col" colspan="2">Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Download</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td colspan="2">Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td colspan="2">Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>Lary</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
</section>
@endsection