<x-app-layout>
    <x-slot name="header">
        {{ __('Detil Pembayaran') }}
    </x-slot>
    <div class="section mt-4 mb-2">
        <div class="invoice-header">
            <h1>Tagihan Anda <span class="badge bg-danger">Belum Dibayar</span></h1>
        </div>
        <p>Segera selesaikan pembayaran tagihan anda agar selalu dapat terhubung dengan layanan Flashnet</p>
        <ul class="listview flush transparent simple-listview mt-3">
            <li>
                <strong>Nama Pelanggan</strong>
                <span>{{ $customer['name'] }}</span>
            </li>
            <li>
                <strong>Flashnet ID</strong>
                <span>{{ $customer['flashnetid'] }}</span>
            </li>
            <li>
                <strong>Periode Tagihan</strong>
                <span>{{ $unpaidBills->count() > 1 ? date('F Y', strtotime($startPeriod)) . ' - ' . date('F Y', strtotime($endPeriod)) : date('F Y', strtotime($unpaidBills->first()['due_date'])) }}</span>
            </li>
            <li>
                <strong>Batas Waktu Pembayaran</strong>
                <span>{{ date('d M Y', strtotime($endPeriod)) }}</span>
            </li>
        </ul>
        <div class="invoice-details mt-2">
            <h2>Detail Tagihan</h2>
            <ul class="listview flush transparent simple-listview mt-3">
                <li>
                    <strong>Meterai</strong>
                    <span>Rp0</span>
                </li>
                <li>
                    <strong>Add On</strong>
                    <span>Rp0</span>
                </li>
                @foreach ($unpaidBills as $unpaidBill)
                    <li>
                        <strong>{{ date('F Y', strtotime($unpaidBill['due_date'])) }}</strong>
                        <span>Rp{{ number_format($unpaidBill['amount'], 0, ',', '.') }}</span>
                    </li>
                @endforeach
                <li>
                    <strong>Subtotal</strong>
                    <span>Rp{{ number_format($totalAmount, 0, ',', '.') }}</span>
                </li>
                <li>
                    <strong>PPN Unsur Kena Pajak (11%)</strong>
                    <span>Rp{{ number_format($totalAmount * 0.11, 0, ',', '.') }}</span>
                </li>
            </ul>
        </div>
        <div class="total-bill mt-2">
            <h2>Total Tagihan</h2>
            <h1>Rp{{ number_format($totalAmount * 1.11, 0, ',', '.') }}</h1>
            <span>Termasuk PPN</span>
        </div>
        <div class="payment-button mt-3">
            <a href="{{ route('bill.payment') }}" class="btn btn-danger btn-block">BAYAR</a>
        </div>
        <div class="contact-us mt-2 text-center">
            <a href="{{ route('support') }}" class="text-danger">HUBUNGI KAMI</a>
        </div>
    </div>


</x-app-layout>
