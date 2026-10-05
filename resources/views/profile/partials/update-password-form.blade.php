<section>
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-2">
                Update Password
            </h4>

            <p class="text-muted mb-4">
                Ensure your account is using a long, random password to stay secure.
            </p>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="update_password_current_password" class="form-label">
                        Current Password
                    </label>

                    <input id="update_password_current_password" name="current_password" type="password"
                        class="form-control" autocomplete="current-password">

                    @error('current_password', 'updatePassword')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="update_password_password" class="form-label">
                        New Password
                    </label>

                    <input id="update_password_password" name="password" type="password" class="form-control"
                        autocomplete="new-password">

                    @error('password', 'updatePassword')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="update_password_password_confirmation" class="form-label">
                        Confirm Password
                    </label>

                    <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                        class="form-control" autocomplete="new-password">

                    @error('password_confirmation', 'updatePassword')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex align-items-center gap-3">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>

                    @if (session('status') === 'password-updated')
                        <span id="savedMessage" class="text-success">
                            Saved.
                        </span>

                        <script>
                            setTimeout(function() {
                                let msg = document.getElementById('savedMessage');
                                if (msg) {
                                    msg.style.display = 'none';
                                }
                            }, 2000);
                        </script>
                    @endif
                </div>

            </form>

        </div>
    </div>
</section>
