<x-guest-layout>
    <x-slot name="header">
        <h1>Register now</h1>
        <h4>Create an account</h4>
    </x-slot>

    <div class="section mb-5 p-2">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="name">Name</label>
                            <input id="name" class="form-control @error('name') is-invalid @enderror"
                                type="text" name="name" value="{{ old('name') }}" placeholder="Your name"
                                required autofocus autocomplete="name">
                            @error('name')
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
                            <label class="label" for="email">E-mail</label>
                            <input id="email" class="form-control @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" placeholder="Your e-mail"
                                required autocomplete="username">
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
                            <label class="label" for="password1">Password</label>
                            <input id="password1" class="form-control @error('password') is-invalid @enderror"
                                type="password" name="password" placeholder="Your password" required
                                autocomplete="new-password">
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

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password_confirmation">Password Again</label>
                            <input id="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                type="password" name="password_confirmation" placeholder="Type password again" required
                                autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mt-2 mb-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheckb1">
                            <label class="form-check-label" for="customCheckb1">
                                I agree <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                    conditions</a>
                            </label>
                        </div>
                    </div>

                </div>
            </div>



            <div class="form-button-group transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>

        </form>
    </div>
</x-guest-layout>
