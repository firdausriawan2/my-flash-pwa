<div class="modal fade action-sheet" id="updatePassword" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Password</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group basic">
                            <label class="label">Current Password</label>
                            <div class="input-group">
                                <input id="update_password_current_password" name="current_password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter your current password" required autocomplete="current-password">
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group basic">
                            <label class="label">New Password</label>
                            <div class="input-group">
                                <input id="update_password_password" name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Enter your new password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group basic">
                            <label class="label">Confirm Password</label>
                            <div class="input-group">
                                <input id="update_password_password_confirmation" name="password_confirmation"
                                    type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    placeholder="Enter your password confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
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
