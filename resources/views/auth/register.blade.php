<x-guest-layout>
    <main class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                {{-- Left Image Card --}}
                <div class="col-md-6 d-none d-md-block">
                    <div class="position-relative" style="max-width: 400px; margin:auto;">

                        {{-- Background Rotate --}}
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3"
                             style="background: linear-gradient(to bottom right, #d0e7ff, #77d8f5); transform: rotate(-3deg); z-index: 0;">
                        </div>

                        {{-- Foreground Card --}}
                        <div class="card bg-white shadow-lg rounded-3 position-relative p-4"
                             style="transform: rotate(2deg); z-index: 1; overflow: hidden;">

                            {{-- Image --}}
                            <div style="height: 500px; overflow: hidden; border-radius: 1rem;">
                                <img src="{{ Storage::url('gallery/slide_pic/slide_pic3.webp') }}"
                                     alt="Football fans" class="img-fluid w-100 h-100"
                                     style="object-fit: cover;">
                            </div>

                            {{-- Text --}}
                            <div class="text-center mt-4">
                                <h3 class="h5 text-dark mb-2">Join Our Community</h3>
                                <p class="text-secondary mb-0">Be part of the Life Football Club family and never miss a moment!</p>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Register Form --}}
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-4">

                            {{-- Header --}}
                            <div class="d-flex flex-column align-items-center mb-4">
                                <img src="{{ Storage::url('lfc_logo.webp') }}" alt="Life FC Logo"
                                     class="img-fluid mb-3"
                                     style="max-width: 200px; height: auto; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <h1 class="fw-bold mt-4 text-center" style="color: #3dd1eb; font-size: 1.5rem;">Create Account</h1>
                                <p class="text-muted text-center">Sign up to join the Life Football Club</p>
                            </div>

                            {{-- Form --}}
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="mb-4">
                                    <label for="name" class="form-label fw-bold" style="color: #64b7c6;">Name</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-person-fill" style="color: #75e4f8;"></i>
                                        </span>
                                        <x-text-input id="name"
                                                      class="form-control form-control-lg border-0 @error('name') is-invalid @enderror"
                                                      type="text" name="name" :value="old('name')" placeholder="Enter your name"
                                                      required autofocus autocomplete="name" />
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-danger" />
                                </div>

                                {{-- Email --}}
                                <div class="mb-4">
                                    <label for="email" class="form-label fw-bold" style="color: #64b7c6;">Email</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-envelope-fill" style="color: #75e4f8;"></i>
                                        </span>
                                        <x-text-input id="email"
                                                      class="form-control form-control-lg border-0 @error('email') is-invalid @enderror"
                                                      type="email" name="email" :value="old('email')"
                                                      placeholder="Enter your email" required autocomplete="username" />
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-danger" />
                                </div>

                                {{-- Password --}}
                                <div class="mb-4">
                                    <label for="password" class="form-label fw-bold" style="color: #64b7c6;">Password</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-lock-fill" style="color: #75e4f8;"></i>
                                        </span>
                                        <x-text-input id="password"
                                                      class="form-control form-control-lg border-0 @error('password') is-invalid @enderror"
                                                      type="password" name="password" placeholder="Enter your password"
                                                      required autocomplete="new-password" />
                                        <button type="button" class="btn btn-light border-0" onclick="togglePassword('password', this)">
                                            <i class="bi bi-eye-fill" style="color: black;"></i>
                                        </button>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-danger" />
                                </div>

                                {{-- Confirm Password --}}
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label fw-bold" style="color: #64b7c6;">Confirm Password</label>
                                    <div class="input-group shadow-sm rounded-3 overflow-hidden">
                                        <span class="input-group-text bg-light border-0">
                                            <i class="bi bi-lock-fill" style="color: #75e4f8;"></i>
                                        </span>
                                        <x-text-input id="password_confirmation"
                                                      class="form-control form-control-lg border-0 @error('password_confirmation') is-invalid @enderror"
                                                      type="password" name="password_confirmation"
                                                      placeholder="Confirm your password" required autocomplete="new-password" />
                                        <button type="button" class="btn btn-light border-0" onclick="togglePassword('password_confirmation', this)">
                                            <i class="bi bi-eye-fill" style="color: black;"></i>
                                        </button>
                                    </div>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-danger" />
                                </div>

                                {{-- Already registered + Register button --}}
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <a href="{{ route('login') }}" class="fw-bold" style="color: #64b7c6; text-decoration: underline;">Already registered?</a>
                                    <x-primary-button class="btn btn-lg" style="background-color: #64b7c6;">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script>
        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
            } else {
                input.type = 'password';
                icon.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
            }
        }
    </script>
</x-guest-layout>
