<x-app-layout>
    <x-slot name="header">
        {{ __('Pembayaran') }}
    </x-slot>
    <div class="section mt-4 mb-2">
        <div class="payment-method">
            <h4>Metode Pembayaran</h4>
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://developers.bri.co.id/sites/default/files/inline-images/BRIVA-BRI.jpg" alt="Briva" class="image-block imaged w48" style="margin-right: 10px;">
                        <span>Briva</span>
                    </div>
                    <a href="#" class="btn btn-outline-danger">Ganti</a>
                </div>
            </div>
        </div>
        <div class="billing-details mt-4">
            <h2>Rincian yang Akan Ditagihkan</h2>
            <ul class="listview flush transparent simple-listview mt-3">
                <li>
                    <strong>Subtotal</strong>
                    <span>Rp{{ number_format($totalAmount * 1.11, 0, ',', '.') }}</span>
                </li>
                <li>
                    <strong>Termasuk PPN</strong>
                </li>
            </ul>
        </div>
        <div class="total-bill mt-2">
            <h2>Total</h2>
            <h1>Rp{{ number_format($totalAmount * 1.11, 0, ',', '.') }}</h1>
        </div>
        <div class="payment-button mt-3">
            <button class="btn btn-danger btn-block">BAYAR</button>
        </div>
    </div>


</x-app-layout>
