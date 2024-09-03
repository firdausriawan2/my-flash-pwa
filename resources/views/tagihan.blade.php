<x-app-layout>
    <x-slot name="header">
        {{ __('Aktivitas') }}
    </x-slot>

    <div class="section mt-2">
        <div class="section-title">Bulan Ini</div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Tagihan internet</strong>
                        <p>3 September 2024, 5:43</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">Rp190.000</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->

     <div class="section mt-2">
        <div class="section-title">Agustus 2024</div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Tagihan internet</strong>
                        <p>2 Agustus 2024, 20:13</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">Rp190.000</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->
</x-app-layout>
