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
                            {{ __('service.nama_perusahaan') }}
                        </p>

                        <ol type="1" class="fa-list-ol p-0 mt-2 ml-2">
                            <li>{{ __('service.1') }}</li>
                            <li>{{ __('service.2') }}</li>
                            <li>{{ __('service.3') }}</li>
                            <li>{{ __('service.4') }}</li>
                            <li>{{ __('service.5') }}</li>
                            <li>{{ __('service.6') }}</li>
                            <li>{{ __('service.7') }}</li>
                            <li>{{ __('service.8') }}</li>
                            <li>{{ __('service.9') }}</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection
