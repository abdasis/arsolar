@extends('frontend.layouts.app')

@section('content')
<div class="container mt-100">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm py-5 px-3 border-top">
                <h3 class="text-center">
                    Profile
                </h3>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <img class="float-left m-3"
                            src="https://solar.ar-solarwindenergy.com/wp-content/uploads/2020/09/are-300x158.png"
                            height="80" alt="">
                        <p>
                            {{ GoogleTranslate::trans('PT. Anugrah Raya Energy solusi energi terbarukan dengan bernagai jenis produk yang kami tawarkan. Dengan produk yang
                            berkuliatas dan layanan service kami dengan berbagai jenis.', Session::get('bahasa') ?? 'id') }}
                        </p>

                        <ol type="1" class="fa-list-ol p-0 mt-2 ml-2">
                            <li>{{ GoogleTranslate::trans('Test Tegangan Tembus', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>
                            <li>{{ GoogleTranslate::trans('Treatment oli trafo', Session::get('bahasa') ?? 'id') }}</li>
                            <li>{{ GoogleTranslate::trans('Repaire transformer', Session::get('bahasa') ?? 'id') }}</li>
                            <li>{{ GoogleTranslate::trans('Analisa gas terlarut pada oli dan test kondisi fisik oli trafo', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Analisa gas terlarut pada oli dan test kondisi fisik oli trafo', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Service cubical (MVMDB), Capasitor Bank, dan Panel (LVMDB)', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Pengadaan oli trafo baru', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Pengadaan trafo, reinstal trafo dan kabel 20 Kv', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Perbaikan, perawatan (Maintenance) genset dan alternator', Session::get('bahasa') ?? 'id') }}
                            </li>
                            <li>{{ GoogleTranslate::trans('Installation building mechanical dan electrical.', Session::get('bahasa') ?? 'id') }}
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection
