<x-app-layout>
    <x-slot name="header">
        {{ __('Contact') }}
    </x-slot>
    <div class="section mt-2">
        <div class="card">
            <div class="card-body">
                <div class="p-1">
                    <div class="text-center">
                        <h2 class="text-primary">Get in Touch</h2>
                        <p>Fill the form to contact us</p>
                    </div>
                    <form>
                        <div class="form-group basic animated">
                            <div class="input-wrapper">

                                <label class="label" for="name2">Your name</label>
                                <input type="text" class="form-control" id="name2" placeholder="John Doe">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic animated">
                            <div class="input-wrapper">
                                <label class="label" for="phone">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text">+62</span>
                                    <input type="text" inputmode="numeric" class="form-control" id="phone"
                                        placeholder="8XXXXXXXXXX">
                                </div>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic animated">
                            <div class="input-wrapper">
                                <label class="label" for="textarea2">Message</label>
                                <textarea id="textarea2" rows="4" class="form-control" placeholder="Message"></textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="mt-2">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-2">
        <div class="card">
            <div class="card-body">
                <div class="p-1">
                    <div class="text-center">
                        <h2 class="text-primary">Our Address</h2>
                        <p class="card-text">
                            Silaing Bawah, Kec. Padang Panjang Bar., Kota Padang Panjang, Sumatera Barat 27211
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
