<x-app-layout>
    <x-slot name="header">
        {{ __('Aktivitas') }}
    </x-slot>
    @foreach ($bills as $bill)
        <div class="section mt-2">
            <div class="section-title">
                @if (\Carbon\Carbon::parse($bill['due_date'])->isCurrentMonth())
                    Bulan Ini
                @else
                    Bulan {{ \Carbon\Carbon::parse($bill['due_date'])->translatedFormat('F') }}
                @endif
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="{{ route('bill.detail', $bill['id']) }}" class="item">
                    <div class="detail">
                        <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Tagihan internet</strong>
                            <p>{{ \Carbon\Carbon::parse($bill['created_at'])->translatedFormat('j F Y, G:i') }}</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price">{{ 'Rp ' . number_format($bill['amount'], 0, ',', '.') }}</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->
    @endforeach
</x-app-layout>
