@extends('layouts.app')
@section('judul','Home')
@section('content')
<!-- slider_area_start -->
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Washagti</span> <br>
                                    Laundry Sakti </h3>
                                <h4>Serahkan urusan cuci mencuci kepada kami</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Washagti</span> <br>
                                    Laundry Sakti </h3>
                                <h4>Pesan layanan laundry secara online</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Washagti</span> <br>
                                    Laundry Sakti </h3>
                                <h4>Hanya di Malang ada laundry sakti</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fas fa-grip-horizontal"></i>
                        </div>
                        <h3>Layanan Beragam</h3>
                        <p>Dari Cuci basah, kering hingga +setrika serta cuci sepatu kami ada</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Laundry Cepat</h3>
                        <p>Mau yang cepat? Pilih jenis layanan <b>Kilat</b></p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h3>Layanan Antar</h3>
                        <p>Gak ada waktu buat ambil laundry-an? Kami antar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->
        <!-- welcome_docmed_area_start -->
        <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Layanan kami</h2>
                        <h3>Banyak pilihan layanan laundry, pilih saja sesuka hati</h3><br>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="country">Layanan</div>
                                    <div class="serial">Harga</div>
                                </div>
                                @foreach($jenis as $j)
                                <div class="table-row">
                                    <div class="country">{{$j->nama}}</div>
                                    <div class="serial">{{$j->harga}}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Delivery Order</h2>
                        <h3>Jangan mau riwa-riwi, Washagti siap antar jemput pakaian kamu</h3><br>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="country">Jenis DO</div>
                                    <div class="serial">Harga</div>
                                </div>
                                @foreach($delivery as $j)
                                <div class="table-row">
                                    <div class="country">{{$j->nama}}</div>
                                    <div class="serial">{{$j->harga}}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->
@endsection
