<x-app-layout>
    <x-slot name="header">
        {{ __('Help Center') }}
    </x-slot>
    <div class="section mt-3">
        <ul class="nav nav-tabs capsuled" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                    FAQ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#card" role="tab">
                    Tiket
                </a>
            </li>
        </ul>
        <div class="tab-content mt-1">
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="section mt-2 text-center">
                    <div class="card">
                        <div class="card-body pt-3 pb-3">
                            <img src="assets/img/sample/photo/vector1.png" alt="image" class="imaged w-50 ">
                            <h2 class="mt-2">Frequently Asked <br> Questions</h2>
                        </div>
                    </div>
                </div>

                <div class="section inset mt-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion01">
                                    Apa itu MyFlash?
                                </button>
                            </h2>
                            <div id="accordion01" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    MyFlash adalah platform penyedia layanan internet yang berbasis di Indonesia. Kami
                                    menyediakan layanan internet dengan kecepatan tinggi dan stabil, serta layanan
                                    dukungan pelanggan yang responsif dan profesional.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion02">
                                    Bagaimana cara masuk ke Aplikasi MyFlash?
                                </button>
                            </h2>
                            <div id="accordion02" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Silahkan download aplikasi MyFlash di Playstore atau Appstore, lalu buka aplikasi
                                    dan login.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion03">
                                    Tidak bisa tersambung ke internet
                                </button>
                            </h2>
                            <div id="accordion03" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion04">
                                    Apakah terdapat Fair Usage Policy (FUP) pada layanan Flashnet?
                                </button>
                            </h2>
                            <div id="accordion04" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion04">
                                    Permintaan Migrasi/ merubah Paket
                                </button>
                            </h2>
                            <div id="accordion04" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion04">
                                    Permintaan Cabut Layanan
                                </button>
                            </h2>
                            <div id="accordion04" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section mt-3 mb-3">
                    <div class="card bg-primary">
                        <div class="card-body text-center">
                            <h5 class="card-title">Masih memiliki pertanyaan?</h5>
                            <p class="card-text">
                                Jangan sungkan untuk menghubungi kami! Tim kami siap membantu Anda.
                            </p>
                            <a href="{{ route('support.contact') }}" class="btn btn-dark">
                                <ion-icon name="mail-open-outline"></ion-icon> Pengaduan Layanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="card" role="tabpanel">
                <div class="section mt-3 mb-3">
                    <div class="section-heading padding ">
                        <h6 class="title" style="font-size: 16px;">Tiket aktif</h6>
                        <br>
                    </div>
                    <div class="text-center">Tidak ada tiket ditemukan</div>
                </div>
                <div class="section mt-3 mb-3">
                    <div class="section-heading padding ">
                        <h6 class="title" style="font-size: 16px;">Tiket terselesaikan</h6>
                    </div>
                </div>
                <ul class="listview image-listview inset">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                            <div class="in">
                                <div>
                                    <header><strong>Tiket #000001</strong></header>
                                    <span class="text-small">Conversation with M.FIRDAUS RIAWAN</span>
                                    <footer>20 hari yang lalu</footer>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
