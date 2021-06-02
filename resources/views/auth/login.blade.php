<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center h-100">
            <div class="col-md-4" style="margin-top: 150px">
                <div class="alert alert-info">
                    Silahkan untuk masuk ke admin
                </div>
                <div class="card shadow-sm border-0 border-top border-primary">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="form-control shadow-none" type="email" name="email" :value="old('email')"
                                             required autofocus />
                            </div>

                            <div class="form-group">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="form-control shadow-none" type="password" name="password" required
                                             autocomplete="current-password" />
                            </div>

                            <div class="form-group">

                                <x-jet-button class="btn btn-primary btn-block mt-2">
                                    {{ __('Login') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
