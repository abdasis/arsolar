@php
$recentproduk = App\Models\Product::paginate(5);
$site = App\Models\Site::first();
@endphp

<footer class="bg-dark footer ">
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center" style="margin-bottom: 0px!important;">
            <div class="col-lg-5">
                <div class="pr-lg-4">
                    <div class="mb-4">
                        <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" height="30">
                    </div>
                    <p class="text-white-50">{{$site->nama_situs }}
                    </p>
                    <div class="text-white-50" style="text-align: justify;text-justify: inter-word;">{!! $site->about_us !!}</div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title">
                        {{ GoogleTranslate::trans('Produk Terbaru', Session::get('bahasa') ?? 'id') }}</p>
                    <ul class="list-unstyled">
                        @if ($recentproduk->count() > 0)
                        @foreach ($recentproduk as $produk)
                        <li>
                            <a href="{{ route('produk.show', $produk->siput) }}"><i
                                    class="mdi mdi-chevron-right mr-2"></i>{{ $produk->nama_produk }}
                                </p>
                            </a>
                        </li>
                        @endforeach
                        @else
                        <li>
                            Belum ada produk
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title">
                        {{ __('footer.tentang_kami') }}
                    </p>
                    <ul class="list-unstyled">
                        <li class="content">
                            <b><i class="mdi mdi-gmail"></i>
                                Email</b>
                            <p class="text-white" style="margin-bottom: 0px;">agussalim@ar-solarwindenergy.com <br>  dede@ar-solarwindenergy.com</p>
                        </li>
                        <li class="content">
                            <b><i class="mdi mdi-whatsapp"></i>
                                Phone
                            </b>
                            <p class="text-white" style="margin-bottom: 0px;">+62811-152-528 <br> +62853-4109-3721</p>
                        </li>
                        <li class="content">
                            <b><i class="mdi mdi-map"></i>
                                {{ __('footer.alamat') }}
                            </b>
                            <p class="text-white font-13" style="margin-bottom: 0px;">
                                Ruko The Palem Residence NO. 38B <br>
                                Jl. H. Nausan Sriamur Tambun Utara <br>
                                (Samping Kantor Camat Tambun Utara ) <br>
                                West Java, Indonesia
                            </p>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="float-left pull-none">
                    <p class="text-white-50">2020 © ARE Solar Energy.</p>
                </div>
                <div class="float-right pull-none">
                    <ul class="list-inline social-links">
                        <li class="list-inline-item text-white-50">
                            Social :
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</footer>

<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

<!-- javascript -->
<script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
<script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
<script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>

<!-- custom js -->
<script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
