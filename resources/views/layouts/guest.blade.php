<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="mobile-web-app-capable" content="yes">
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
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        @if (Route::currentRouteName() != 'index')
            <div class="left">
                <a href="#" class="headerButton goBack">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </a>
            </div>
        @endif
        <div class="pageTitle"></div>
        @if (Route::currentRouteName() == 'register')
            <div class="right">
                <a href="app-login.html" class="headerButton">
                    Login
                </a>
            </div>
        @endif
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        @isset($header)
            <div class="section mt-2 text-center">
                {{ $header }}
            </div>
        @endisset

        {{ $slot }}

    </div>
    <!-- * App Capsule -->


    <!-- Terms Modal -->
    <div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and Conditions</h5>
                    <a href="#" data-bs-dismiss="modal">Close</a>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                        fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                        varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                        auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                        cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                    </p>
                    <p>
                        Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                        Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                        dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                        vulputate ligula.
                    </p>
                    <p>
                        Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                        egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                        torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                        vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                        Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                        sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- * Terms Modal -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>
