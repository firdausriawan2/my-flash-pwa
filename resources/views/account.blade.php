<x-app-layout>
    <x-slot name="header">
        {{ __('Account') }}
    </x-slot>

    <div class="section mt-3 text-center">
        <div class="avatar-section">
            <a href="#">
                <img src="{{ Auth::user()->avatar ?? 'assets/img/sample/avatar/avatar1.jpg' }}" alt="avatar"
                    class="imaged w100 rounded">
                <span class="button">
                    <ion-icon name="camera-outline"></ion-icon>
                </span>
            </a>
        </div>
    </div>

    <div class="listview-title mt-1">Theme</div>
    <ul class="listview image-listview text inset no-line">
        <li>
            <div class="item">
                <div class="in">
                    <div>
                        Dark Mode
                    </div>
                    <div class="form-check form-switch  ms-2">
                        <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                        <label class="form-check-label" for="darkmodeSwitch"></label>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    {{-- <div class="listview-title mt-1">Notifications</div>
    <ul class="listview image-listview text inset">
        <li>
            <div class="item">
                <div class="in">
                    <div>
                        Payment Alert
                        <div class="text-muted">
                            Send notification when new payment received
                        </div>
                    </div>
                    <div class="form-check form-switch  ms-2">
                        <input class="form-check-input" type="checkbox" id="SwitchCheckDefault1">
                        <label class="form-check-label" for="SwitchCheckDefault1"></label>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a href="#" class="item">
                <div class="in">
                    <div>Notification Sound</div>
                    <span class="text-primary">Beep</span>
                </div>
            </a>
        </li>
    </ul> --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="listview-title mt-1">Profile Settings</div>
    <ul class="listview image-listview text inset">
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#changeUsername">
                <div class="in">
                    <div>Change Username</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#changeEmail">
                <div class="in">
                    <div>Update E-mail</div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#changeAddress">
                <div class="in">
                    <div>Address</div>
                    <span class="text-primary">Edit</span>
                </div>
            </a>
        </li>
    </ul>

    <div class="listview-title mt-1">Security</div>
    <ul class="listview image-listview text mb-2 inset">
        <li>
            <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#updatePassword">
                <div class="in">
                    <div>Update Password</div>
                </div>
            </a>
        </li>
        <!-- 2FA Verification -->
        {{-- <li>
            <div class="item">
                <div class="in">
                    <div>
                        2 Step Verification
                    </div>
                    <div class="form-check form-switch ms-2">
                        <input class="form-check-input" type="checkbox" id="SwitchCheckDefault3" checked />
                        <label class="form-check-label" for="SwitchCheckDefault3"></label>
                    </div>
                </div>
            </div>
        </li> --}}
        <!-- * 2FA Verification -->
        <li>
            <a href="{{ route('logout') }}" class="item"
                onclick="event.preventDefault(); document.getElementById('logout-link').click();">
                <div class="in">
                    <div>Log out</div>
                </div>
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
                <button type="submit" id="logout-link"></button>
            </form>
        </li>
    </ul>

    @include('profile.partials.update-username-form')
    @include('profile.partials.update-email-form')
    @include('profile.partials.update-address-form')
    @include('profile.partials.update-password-form')
</x-app-layout>
