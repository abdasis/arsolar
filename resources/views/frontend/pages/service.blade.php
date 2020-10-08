@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3 class="text-center">
                    Service
                </h3>
                <p class="text-center font-16 ">
                    Kami memasok peralatan mekanik dan distributor resmi penjualan alat-alat berat transformer dan generating set (Genset) berbagai merk seperti :
                </p>
            </div>
        </div>

        <div class="row">
            {{-- @foreach ($tradings as $trading)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top">
                        <a href="{{ route('produk.show', $product->nama_produk) }}">
                            <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}"  alt="product-pic" class="img-fluid">
                        </a>                    </div>
                    <div class="card-body p-2 shadow">
                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-13 mt-0 sp-line-1"><a href="{{ route('produk.show', $product->nama_produk) }}" class="text-dark">{{ $product->nama_produk }}</a> </h5>
                                </div>
                                <div class="col-auto">
                                    <div class="product-price-tag">
                                        <a href="#">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div>
                </div>
            </div>
            @endforeach --}}
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title">Service Pertama</h3>
                        <img src="{{ asset('frontend/assets/images/service/page_1.png') }}" alt="" srcset="">
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Service Kedua</div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Service Ketiga</div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Service Keempat</div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Service Kelima</div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="card-title">Service Keenam</div>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui culpa, odio nesciunt amet illo eius consequuntur beatae nulla, unde, est officia dicta laborum sequi ut dolor facilis. Voluptate, explicabo eius.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3 class="text-center">
                    Trading
                </h3>
                <p class="text-center font-16 ">
                    Kami memasok peralatan mekanik dan distributor resmi penjualan alat-alat berat transformer dan generating set (Genset) berbagai merk seperti :
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">PERKINS</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_17.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">DEUTZ</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_21.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">CUMMINS</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_14.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">CATERPILAR</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_15.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
