<x-app-layout>
    <x-slot name="header">
        {{ __('Devices') }}
    </x-slot>
    <div class="section mt-3">
        <ul class="nav nav-tabs capsuled" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                    Wifi ({{ count($devices) }})
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#wired" role="tab">
                    Wired (0)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#block" role="tab">
                    Block (0)
                </a>
            </li>
        </ul>
        <div class="tab-content mt-1">
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="row mb-2">
                    @foreach ($devices as $device)
                        <div class="section mt-2 text-center">
                            <div class="card">
                                <div class="card-body pt-3 pb-3">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <p>Device Name:</p>
                                            <p>Port ID:</p>
                                            <p>MAC Address:</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p>{{ $device['device_name'] }}</p>
                                            <p>{{ $device['port_id'] }}</p>
                                            <p>{{ $device['mac_address'] }}</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6 text-start">
                                            <p>Nama Vendor:</p>
                                            <p>Status:</p>
                                            <p>IP Address:</p>
                                            <p>RSSI:</p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p>{{ $device['vendor_name'] }}</p>
                                            <p class="text-success">{{ $device['status'] }}</p>
                                            <p>{{ $device['ip_address'] }}</p>
                                            <p class="text-success">{{ $device['rssi'] }}</p>
                                        </div>
                                    </div>
                                    <div class="text-end mt-2">
                                        <a href="#" class="text-danger"  data-bs-toggle="modal" data-bs-target="#changePassword">Change password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="wired" role="tabpanel">
                <div class="section mt-3 mb-3">
                    <div class="text-center">Tidak ada device terhubung</div>
                </div>
            </div>
            <div class="tab-pane fade" id="block" role="tabpanel">
                <div class="section mt-3 mb-3">
                    <div class="text-center">Tidak ada device diblock</div>
                </div>
            </div>
        </div>
    </div>

     <!-- DialogIconedSuccess -->
        <div class="modal fade dialogbox" id="DialogIconedSuccess" data-bs-backdrop="static" tabindex="-1"
            role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-icon text-success">
                        <ion-icon name="checkmark-circle"></ion-icon>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                    </div>
                    <div class="modal-body">
                        Your device password has been changed.
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * DialogIconedSuccess -->
    @include('pages.device.change-password')
</x-app-layout>
