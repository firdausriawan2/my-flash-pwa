<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{{ env('APP_NAME', 'MyFlash') }}</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    {{-- <link rel="manifest" href="__manifest.json"> --}}
    @laravelPWA
    @if (isset($style))
        {{ $style }}
    @endif
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    @if (Route::currentRouteName() == 'home')
        @include('layouts.navigation')
    @else
        @include('layouts.navigation2')
    @endif
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">
        {{ $slot }}
    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <!-- Button Home -->
        @php $isHome = Route::currentRouteName() == 'home'; @endphp
        <a href="{{ $isHome ? '#' : route('home') }}" class="item {{ $isHome ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="grid-outline"></ion-icon>
            </div>
        </a>
        <!-- * Button Home -->

        <!-- Button Bill -->
        @php $isBill = Route::currentRouteName() == 'bill'; @endphp
        <a href="{{ $isBill ? '#' : route('bill') }}" class="item {{ $isBill ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="receipt-outline"></ion-icon>
                {{-- <strong>Tagihan</strong> --}}
            </div>
        </a>
        <!-- * Button Bill -->

        <!-- Button Support -->
        <a href="app-settings.html" class="item">
            <div class="col">
                <ion-icon name="chatbubble-outline"></ion-icon>
            </div>
        </a>
        <!-- * Button Support -->

        <!-- Button Account -->
        @php $isAccount = Route::currentRouteName() == 'account'; @endphp
        <a href="{{ $isAccount ? '#' : route('account') }}" class="item {{ $isAccount ? 'active' : '' }}"
            class="item">
            <div class="col">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </a>
        <!-- * Button Account -->
    </div>
    <!-- * App Bottom Menu -->

    <!-- iOS Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image"
                                class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>Finapp</strong> on your iPhone's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1">
                            <img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>{{ env('APP_NAME', 'MyFlash') }}</strong> on your Android's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Android Add to Home Action Sheet -->



    <div id="cookiesbox" class="offcanvas offcanvas-bottom cookies-box" tabindex="-1" data-bs-scroll="true"
        data-bs-backdrop="false">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">We use cookies</h5>
        </div>
        <div class="offcanvas-body">
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non lacinia quam. Nulla facilisi.
                <a href="#" class="text-secondary"><u>Learn more</u></a>
            </div>
            <div class="buttons">
                <a href="#" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">I understand</a>
            </div>
        </div>
    </div>

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

    @if (isset($script))
        {{ $script }}
    @endif
</body>

</html>
