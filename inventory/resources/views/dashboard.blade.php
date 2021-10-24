@extends('layouts.layout')

@section('title', 'E-inventory')

@section('content')
<div>
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <a href="/trPenawaran">
                <div class="card card-shadow border-0">
                    <div class="card-body pt-2 pb-2">
                      <div class="row justify-content-between">
                        <div class="col-5 text-center">
                          <div class="bg-primary mt-n4 rounded" style="margin-top: -25px">
                            <i
                              class="fa fa-handshake-o text-light fa-2x py-4"
                            ></i>
                          </div>
                        </div>
                        <div class="col text-right">
                          <small class="text-muted">Penawaran Belum Deal</small>
                          <h4 id="soNotDeal">22</h4>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted border-0">
                      <i class="fa fa-calendar-o mr-2"></i>7 Hari lalu
                    </div>
                  </div>
            </a>
          </div>


            <div class="col-12 col-sm-6 col-lg-3 mb-5">
                <a href="/suratJalan">
                <div class="card card-shadow border-0">
                  <div class="card-body pt-2 pb-2">
                    <div class="row justify-content-between">
                      <div class="col-5 text-center">
                        <div class="bg-danger mt-n4 rounded" style="margin-top: -25px">
                          <i
                            class="fa fa-folder-open text-light fa-2x py-4"
                          ></i>
                        </div>
                      </div>
                      <div class="col text-right">
                        <small class="text-muted">Surat Jalan Pending</small>
                        <h4 id="surJalPending">7</h4>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-muted border-0">
                    <i class="fa fa-calendar-o mr-2"></i>7 Hari lalu
                  </div>
                </div>
            </a>
              </div>


          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <a href="/fakturPembelian">
                <div class="card card-shadow border-0">
                    <div class="card-body pt-2 pb-2">
                      <div class="row justify-content-between">
                        <div class="col-5 text-center">
                          <div class="bg-warning mt-n4 rounded" style="margin-top: -25px">
                            <i
                              class="fa fa-credit-card-alt text-light fa-2x py-4"
                            ></i>
                          </div>
                        </div>
                        <div class="col text-right">
                          <small class="text-muted">Pembelian Belum Lunas</small>
                          <h4 id="beliBelumTempo">15</h4>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted border-0">
                      <i class="fa fa-calendar-o mr-2"></i>7 Hari lalu
                    </div>
                  </div>
            </a>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 mb-5">
            <a href="/returPenjualan">
                <div class="card card-shadow border-0">
                    <div class="card-body pt-2 pb-2">
                      <div class="row justify-content-between">
                        <div class="col-5 text-center">
                          <div class="bg-success mt-n4 rounded" style="margin-top: -25px">
                            <i
                              class="fa fa-cubes text-light fa-2x py-4"
                            ></i>
                          </div>
                        </div>
                        <div class="col text-right">
                          <small class="text-muted">Total Barang Retur</small>
                          <h4 id="totalRetur">3</h4>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-muted border-0">
                      <i class="fa fa-calendar-o mr-2"></i>7 Hari lalu
                    </div>
                  </div>
            </a>
          </div>
      </div>

    </div>
  </div>

  <script>
    // var ctx = document.getElementById('myChart').getContext('2d');
    getDashboard()

    function getDashboard(){
        $.ajax({
            method : 'GET',
            url: '/getDashboard',
            success: function(data){
                $('#soNotDeal').html(data.soNotDeal)
                $('#surJalPending').html(data.suratJalanPending)
                $('#beliBelumTempo').html(data.pembelianBelumJatuhTempo)
                $('#totalRetur').html(data.totalRetur)
            },
        })
    }
    </script>
@endsection

