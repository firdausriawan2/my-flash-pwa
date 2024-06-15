<x-guest-layout>
    <x-slot name="header">
        <h1>Log in</h1>
        <h4>Fill the form to log in</h4>
    </x-slot>
    <div class="section mb-5 p-2">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email">E-mail</label>
                            <input id="email" class="form-control @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" placeholder="Your e-mail"
                                required autofocus autocomplete="username">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password">Password</label>
                            <input id="password" class="form-control @error('password') is-invalid @enderror"
                                type="password" name="password" required autocomplete="current-password"
                                placeholder="Your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-links mt-2">
                <div>
                    <a href="{{ route('register') }}">Register Now</a>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a>
                    @endif
                </div>
            </div>

            <div class="form-button-group  transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
            </div>

        </form>
    </div>


</x-guest-layout>
