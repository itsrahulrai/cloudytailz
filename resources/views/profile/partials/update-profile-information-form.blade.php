<section>
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-4">

            <h4 class="fw-bold mb-2">
                Profile Information
            </h4>

            <p class="text-muted mb-4">
                Update your account's profile information and email address.
            </p>

            <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Name
                    </label>

                    <input id="name" name="name" type="text" class="form-control"
                        value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">

                    @error('name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="email" class="form-label">
                        Email
                    </label>

                    <input id="email" name="email" type="email" class="form-control"
                        value="{{ old('email', $user->email) }}" required autocomplete="username">

                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror


                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())

                        <div class="mt-3">
                            <p class="small text-muted mb-2">
                                Your email address is unverified.
                            </p>

                            <button form="send-verification" class="btn btn-outline-primary btn-sm">
                                Re-send Verification Email
                            </button>

                            @if (session('status') === 'verification-link-sent')
                                <div class="alert alert-success mt-3 mb-0 py-2">
                                    A new verification link has been sent to your email address.
                                </div>
                            @endif

                        </div>

                    @endif

                </div>


                <div class="d-flex align-items-center gap-3">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>

                    @if (session('status') === 'profile-updated')
                        <span id="profileSaved" class="text-success">
                            Saved.
                        </span>

                        <script>
                            setTimeout(function() {
                                let msg = document.getElementById('profileSaved');
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
