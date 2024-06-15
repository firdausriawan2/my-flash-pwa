<div class="modal fade action-sheet" id="changeEmail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Email</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group basic">
                            <label class="label" for="email">Email</label>
                            <div class="input-group">
                                <input id="email" name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', Auth::user()->email) }}" placeholder="Enter your email"
                                    required autocomplete="username">
                                @error('email')
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
