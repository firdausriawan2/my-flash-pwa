<div class="modal fade action-sheet" id="changeAddress" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Address</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="address">Address</label>
                                <textarea id="address" name="address" rows="2" class="form-control" placeholder="Your address">{{ Auth::user()->address }}</textarea>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
