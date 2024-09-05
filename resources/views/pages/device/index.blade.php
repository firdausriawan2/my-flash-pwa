<x-app-layout>
    <x-slot name="header">
        {{ __('Devices') }}
    </x-slot>
    <div class="section mt-2">
        <div class="section-title">Perangkat Terhubung</div>
        <div class="card">
            <div class="card-body">
                <ul class="listview image-listview">
                    <li>
                        <div class="item">
                            <ion-icon name="wifi" class="image"></ion-icon>
                            <div class="in">
                                <div>Wifi</div>
                                <span class="text-muted">2</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <ion-icon name="git-network-outline" class="image"></ion-icon>
                            <div class="in">
                                <div>Wired Lan</div>
                                <span class="text-muted">0</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <ion-icon name="lock-closed-outline" class="image"></ion-icon>
                            <div class="in">
                                <div>Block</div>
                                <span class="text-muted">0</span>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="section-heading padding d-flex justify-content-end mt-2">
        <a href="{{ route('device.detail') }}" class="link">Lihat detail ></a>
    </div>
</x-app-layout>
