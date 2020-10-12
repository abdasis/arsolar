@extends('frontend.layouts.app')


@section('content')
        <!-- home start -->
<section class="slider " style="margin-top: 100px">
    <div class="card card-slider">
        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style="position: relative;">
                @foreach ($sliders as $key => $slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ url('/') }}/gambar_slider/{{ $slider->gambar_slider }}"  alt="{{ $slider->gambar_slider }}" class="w-100 img-responsive">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- home end -->


<!-- features start -->
<section class="section-sm" id="features">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4 pb-1">
                    <h3 class="mb-3">APA YANG KITA TAWARKAN</h3>
                    <p class="text-muted">Kami menetapkan standar untuk layanan pelanggan surya</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-3">
                <div class="features-box shadow">
                    <div class="features-img mb-4">
                        <img src="{{ url('/') }}/icon-kategori/{{ $category->icon }}" alt="{{ $category->icon }}">
                    </div>
                    <a href="{{ url('/produk') }}/?kategory={{ $category->nama_kategori }}"><h4 class="mb-2">{{ $category->nama_kategori }}</h4></a>
                    <p class="text-center">{{ $category->diskripsi_kategori }}</p>
                </div>
            </div>
            @endforeach
            <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- end container-fluid -->
</section>
<!-- features end -->

{{-- section about  --}}
<section class="about-section pb-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card-box about-box">
                    <h1>TENTANG {{ $site->nama_situs }}</h1>
                    <p>{!! $site->about_us !!}</p>
                    <a href="{{ route('aboutus') }}">
                        <button class="btn btn-outline-light btn-lg btn-rounded">BACA LEBIH BANYAK</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- end section about  --}}

<!-- available demos start -->
<section class="section bg-light" id="demo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center mb-3">
                    <h3>PRODUCT KAMI</h3>
                    <p class="text-muted">Kumpulan produk yang kami sediakan untuk anda.</p>
                </div>
            </div>
        </div>

        <!-- end row -->

        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card product-box shadow">
                    <div class="card-img-top">
                        <a href="{{ route('produk.show', $product->nama_produk) }}">
                            <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}"  alt="{{ $product->nama_produk }}" class="img-fluid align-content-center">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-15 mt-0 sp-line-1"><a href="{{ route('produk.show', $product->nama_produk) }}" class="text-dark">{{ $product->nama_produk }}</a> </h5>
                                </div>
                                <div class="col-auto">
                                    <div class="product-price-tag">
                                        <a href="{{ route('produk.show', $product->nama_produk) }}">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div>
                </div> <!-- end card-box-->
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</section>
<!-- available demos end -->

<!-- features start -->
<section class="section">
    {{-- <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4 pb-1">
                    <h3>OUR PROJECT</h3>
                    <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                </div>
            </div>
        </div> --}}
        <!-- end row -->

        {{-- <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="demo-box bg-white mt-4 p-2">
                    <a href="{{ route('proyek.show', 1) }}" class="text-dark">
                        <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}" alt="" class="img-fluid mx-auto d-block">
                        <div class="p-3 text-center">
                            <h5 class="mb-0">{{ strtoupper('rumah menggunakan 2kw dari sistem tenaga surya grid di Sri Lanka') }}</h5>
                        </div>
                    </a>
                </div>
            </div> --}}
            {{-- @foreach ($proyeks as $proyek)

            @endforeach --}}
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- features end -->


<!-- contact start -->
<section class="section pb-5 bg-gradient" id="contact">
    <div class="bg-shape">
        <img src="{{ url('/') }}/frontend/assets/images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title text-center mb-4">
                    <h3 class="text-white">Have any Questions ?</h3>
                    <p class="text-white">Please fill out the following form and we will get back to you shortly</p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="custom-form p-5 bg-white">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="comments">Message</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- end custom-form -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- contact end -->

@endsection
