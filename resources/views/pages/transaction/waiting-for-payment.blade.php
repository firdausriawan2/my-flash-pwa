<x-app-layout>
    <x-slot name="header">
        {{ __('Pembayaran') }}
    </x-slot>
    <div class="section mt-4 mb-2">
        <div class="billing-details mt-4">
            <ul class="listview flush transparent simple-listview mt-3">
                <li>
                    <h2>Bayar sebelum</h2>
                    <span class="badge badge-danger"><ion-icon name="time-outline"></ion-icon> 23:55:20</span>
                </li>
                <li>
                    <span>
                        <p>Nomor Virtual Account</p>
                        <h3>152012024647814 <a><ion-icon name="copy-outline"></ion-icon></a></h3>
                    </span>
                    <img src="https://developers.bri.co.id/sites/default/files/inline-images/BRIVA-BRI.jpg" alt="Briva"
                        class="image-block imaged w48" style="margin-right: 10px;">
                </li>
                <li>
                    <span>
                        <p>Total Tagihan</p>
                        <h3>Rp421.800 <ion-icon name="copy-outline"></ion-icon></h3>
                    </span>
                    <a href="" class="btn btn-text-danger">Lihat Detail</a>
                </li>
                <li>
                    <p><strong>Penting:</strong> Transfer Virtual Account hanya bisa dilakukan dari bank yang kamu pilih
                    </p>
                </li>
                <li class="d-flex justify-content-between">
                    <table>
                        <tbody>
                            <td>
                                <a href="#" class="btn btn-outline-danger ">Lihat Cara Bayar</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-danger">Cek Status Bayar</a>
                            </td>
                        </tbody>
                    </table>
                </li>
            </ul>
        </div>
    </div>


</x-app-layout>
