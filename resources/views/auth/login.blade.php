@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center h-100">
        <div class="col-md-5" style="margin-top: 150px">
            <div class="card shadow-md">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                required autofocus />
                        </div>

                        <div class="form-group">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="form-group">

                            <x-jet-button class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
