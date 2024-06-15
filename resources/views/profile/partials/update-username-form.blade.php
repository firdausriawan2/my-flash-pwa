<div class="modal fade action-sheet" id="changeUsername" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Username</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group basic">
                            <label class="label">Name</label>
                            <div class="input-group">
                                <input id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', Auth::user()->name) }}" placeholder="Enter your name" required
                                    autofocus autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
