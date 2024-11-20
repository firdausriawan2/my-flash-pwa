<x-app-layout>
    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">{{ $customer['name'] }}</span>
                    <h2 class="total">{{ $customer['flashnetid'] }}</h2>
                </div>
                <div class="right">
                    @if ($totalUnpaid > 0)
                        <a href="{{ route('bill.detail') }}" class="button btn-text-danger text-center">
                            Belum Lunas
                        </a>
                    @else
                        <a href="#" class="button">
                            Lunas
                        </a>
                    @endif
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            {{-- <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <strong>Withdraw</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <strong>Send</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="app-cards.html">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <strong>Cards</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="swap-vertical"></ion-icon>
                            </div>
                            <strong>Exchange</strong>
                        </a>
                    </div>

                </div> --}}
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addona1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                        value="100">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Rekomendasi untuk anda -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Rekomendasi Untuk Anda</h2>
        </div>

        <!-- carousel single -->
        <div class="carousel-single splide" id="autoCarousel">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <!-- card block -->
                        <img class="img-fluid rounded" src="assets/img/1.jpeg" alt="">
                        <!-- * card block -->
                    </li>
                    <li class="splide__slide">
                        <!-- card block -->
                        <img class="img-fluid rounded" src="assets/img/2.jpeg" alt="">
                        <!-- * card block -->
                    </li>
                     <li class="splide__slide">
                        <!-- card block -->
                        <img class="img-fluid rounded" src="assets/img/3.jpeg" alt="">
                        <!-- * card block -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>
    <!-- * Rekomendasi untuk anda -->

    <!-- News -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Berita Terkini</h2>
            <a href="app-blog.html" class="link">View All</a>
        </div>

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <a href="{{ route('news', 1) }}">
                            <div class="blog-card">
                                <img src="assets/img/news/1.jpeg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Pemko Padang Panjang Tanda...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="{{ route('news', 2) }}">
                            <div class="blog-card">
                                <img src="assets/img/news/2.jpeg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Rayakan HJK ke-234, Pemko akan Gelar Padang Panjang Fest</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="{{ route('news', 3) }}">
                            <div class="blog-card">
                                <img src="assets/img/news/3" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Padang Panjang Raih Piala Adipura ke-16, Pj Wali Kota Serahkan Bonus untuk 334 Petugas Kebersihan</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>
    <!-- * News -->

    <!-- Penawaran Terbaik -->
    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title">Penawaran Terbaik</h2>
        </div>
        <!-- carousel multiple -->
        <div class="carousel-multiple splide" id="offerCarousel">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/1.jpg" alt="img"
                                    class="image-block imaged w48">
                            </div>
                            <div class="price">IPTV</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">Detail</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/2.jpg" alt="img"
                                    class="image-block imaged w48">
                            </div>
                            <div class="price">CCTV</div>
                            <p>Music Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">Detail</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/2.jpg" alt="img"
                                    class="image-block imaged w48">
                            </div>
                            <div class="price">STORAGE</div>
                            <p>Credit Card Statement
                            </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">Detail</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->
    </div>
    <!-- * Penawaran Terbaik -->

    <x-slot name="style">
        <style>
            .wallet-card .balance .right .button {
                width: 100px;
                height: 64px;
                font-size: 20px;
            }

            .wallet-card .balance .total {
                font-size: 25px;
            }
        </style>
    </x-slot>
    <x-slot name="script">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                new Splide('#autoCarousel', {
                    type: 'loop',
                    autoplay: true,
                    interval: 3000, // Change slide every 3 seconds
                    gap: 16,
                    padding: 16,
                    arrows: false,
                    pagination: false,
                }).mount();
            });

            new Splide('#offerCarousel', {
                type: 'loop',
                autoplay: true,
                interval: 3000, // Change slide every 3 seconds
                arrows: false,
                pagination: false,
            }).mount();
        </script>
    </x-slot>
</x-app-layout>
